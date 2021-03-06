<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

namespace MediaWiki\Logger\Monolog;

use Wikimedia\AtEase\AtEase;

/**
 * @covers \MediaWiki\Logger\Monolog\AvroFormatter
 */
class AvroFormatterTest extends \MediaWikiUnitTestCase {

	protected function setUp() : void {
		if ( !class_exists( \AvroStringIO::class ) ) {
			$this->markTestSkipped( 'Avro is required for the AvroFormatterTest' );
		}
		parent::setUp();
	}

	public function testSchemaNotAvailable() {
		// Avro has been removed from MW >= 1.36, so skip this test if running on PHP >= 8.0
		if ( PHP_VERSION_ID >= 80000 ) {
			$this->markTestSkipped( 'Test fails on PHP 8.0' );
		}
		$formatter = new AvroFormatter( [] );
		$this->expectNotice();
		$this->expectNoticeMessage( "The schema for channel 'marty' is not available" );
		$formatter->format( [ 'channel' => 'marty' ] );
	}

	public function testSchemaNotAvailableReturnValue() {
		$formatter = new AvroFormatter( [] );
		// have to keep the user notice from being output
		AtEase::suppressWarnings();
		$res = $formatter->format( [ 'channel' => 'marty' ] );
		AtEase::restoreWarnings();
		$this->assertSame( '', $res );
	}

	public function testDoesSomethingWhenSchemaAvailable() {
		$formatter = new AvroFormatter( [
			'string' => [
				'schema' => [ 'type' => 'string' ],
				'revision' => 1010101,
			]
		] );
		$res = $formatter->format( [
			'channel' => 'string',
			'context' => 'better to be',
		] );
		$this->assertNotEquals( '', $res );
		// basically just tell us if avro changes its string encoding, or if
		// we completely fail to generate a log message.
		$this->assertEquals( 'AAAAAAAAD2m1GGJldHRlciB0byBiZQ==', base64_encode( $res ) );
	}
}
