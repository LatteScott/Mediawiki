<?php

namespace SMW\Utils;

/**
 * @see https://www.semantic-mediawiki.org/wiki/SMW_logo
 *
 * @license GNU GPL v2+
 * @since 3.1
 *
 * @author mwjames
 */
class Logo {

	/**
	 * @since 3.1
	 *
	 * @param string $key
	 *
	 * @return string
	 */
	public static function get( $key ) {

		if ( $key === 'small' || $key === '100x90' ) {
			return self::small();
		}

		if ( $key === 'footer' ) {
			return self::footer();
		}
	}

	private static function small() {
		return 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABZCAYAAADIBoEnAAAACXBIWXMAAAPsAAAD7AFKhtV5AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAADwdJREFUeJzVnXt0VdWdxz+/c+9NAuTBKwEfMFW0iFgUUYFqlyCMdSF5gaTDjB1nWMvRttMBBSHBmfbWUp4RsLOcqXTWtMuuGW1AQkis1iq4pi4CImitiI+KLx4mgRCSQB733vObP5LgvSGQe87Zh95+18of2Xfv7/6e/TuPvc/+/X5HuAgYP68i7XhnWrGtFAk6Ebi8+6fDwH4RqRqe1ll5YHNJ58XQk8r6xO8Ocgu2zhNkDXBFP1U/VpGlDVVFW/zWFI9U0+efQeZVBHI7QuUCixy1U91QnxF9hM0lMZ+UdSFF9Vl+kAK4OlgAkYfyOkJrfZCUgFTV58sVkptfWSLCrz2RKPfUVxc/Z0hSAlJZn3GDjJ9XkdbQEToIXOmR6pPsSPo1f3phVocJXT1IdX3Gb1nH20Nz8X6wAF9pSessMsCTgFTXZ9wgNhSa4lJVY1w9SHV9QdOEIkwyxZUzIDh/QXntfFN8AFv2NtDcZmyCZOxYe+DHLGukKaIzneZnlm2dtkm6S02SgT8GUVNE4v+61SuMnzHGb1nAUWCsCaKMNCsGNJvg6sGANCs70hYLmOBS5agJnniYN4jwOmrGIM3t0V+tXjL1H01w9SCvsPJp4NsmuMRijwmeeJi/ZaluM8ZlU2WMqwcprs+4QerTo1WgB7zyCPJefcvgGhOa4pHq+sxfIZtLYgpL8PZwt1V1Ia9Oj5qSdRYprs+Xl4sN2+e8iGjYbXsR/UF9dfFLBiUlIJX1+TqvnPm93/7hj5+3TdDkT0YFHqvfXvQjEGPT5/NhREHlQoX1JHtiCowdMfDg7zfdOd4vfb4ZZPnju6fbqjuONXWy91ALx1sj/TXZb1ks/mJb8at+aeoLIwuqptvY5cCNF6o3PDPELWOyGJmTho3cuXbJlN/5occXg8yrqAiM+WzUfmACgKIcPtH57svvnnxFVW5EtGuLVOWwKPvArqqb9ParhMNGl9FJIxy2RuybMA1LivrSd8d1OXeMHpZ+3ZcLVT2Q0dpxQzhs/hnix8KQMZ+NfgB0Qs//gujooekL6qqKzz9vr/ZDSZIIh+062EHX3zn4q9t3TwJ9nbO3NhnflpVxP/CfpqUYv0JKV/1+CKHgB8DwuOJfml7gXWyUltf+Eriv53+BRjqtr65aPvmEyX6Mz7IkFPwRicZotWOxR033c7FhBWUZca9xFIZquv0D4/2YJFu6oXacwoMJhcqKtctuM/7O52Jj5aIpdYqsSihUvrts/a6vmezH6DMkEJMNioa+LNFDp9ObNprs4yxz9bDL0OhY0BFYkgWArS0gdUjwfck/ccR0nwNas9a3ZzYvAK7uLgpiywZgpqk+jD1Dysp3FSlSGV+mKkVrHpli5H2P7iSD0zn5QDEq00AvuXALOQa6E6gk81SNTKfdhA6/j9OIQcLhA2ntmc3v8OWZA+iO1Uu+PsMrt27NzCMYWIjwXWCwS5qTCP+BFXtCZrU2eNVUVr77RUW/Gafy0Om0pmv//V+8OzwYeYa0ZbY8TIIxiKrlwucpDrqToFYPXkgo8CHCctwbA2AIyqPEAh9r9eCwVpDmRRvwMBC30pUrB3UM8XS8Z5m8EizfuHuEHdUPgOw41p+uXjx1oVtO3TZ0FEH7GVRv9arvPHgd5W+k4NTHbgnKymt/qvD9uKIWKxAau/Khm455Eeb5CrGjuoY4Ywg0Sof1mFs+3Z49hUDsTR+NAXALwh6tzr7FLYFGoj8EjscVZdmxyEqvwjwZpLR89yR67b4p8m9uF0taM3g6Ii8Dw7zoShK5IDu0evA0N41Xl33jpJ77xvi+pet3uTYyeDGIqoBuTOTQAxmtbZtc0dXkTEK1ChjkWpNzDAKt0ucH3+Cm8aFRh38GvB1XJJYtT3SNjTu4NkjZ43vuBW6LL7OxHnLzwk1rcoYAW4Ast3o8IBtbq3RrluOrcnNJScwS6f0wn7Js/Z6/cyvGlUHC4TcGquiKhELlOdevpJVNKF9x1dYMRhOynnTTcOXiKTsVtsaXierq8JM7M93wXXClfml+9egYkYmKdRmAYB+JWNb+jszIgyij46p2ENBSNwL0+ey7sLnHTVvD+JZWZz8t+c2/cdowpNaSqNizgIzuosvaz2SUXppfvamv8WusKvr8fFzn3uvCYStv/4T5IA/T96aNDssK6dcuH2RdkZve5cym/GT1I1P/1emBqCLU5LwNXOe0rT/QA+xrniBhHO/LlJXX/kRhuaIcqm/nncNn9ERrpK9niQJvisjjdRPferb3HlBCg6GF20YFbd2CkNRMITcrxLRxOV/kDoleHf7e9FanB6HVg4tAK/uveREhUiizm7Y7bRYOvzGwIdTxwc53T152vKXf3dEe7IkG7Xsat8493FNw9pY1Mn/7eFvtl5HkfXMbWiJU7jsxwLYZDbybtPqz0H9y3sZnKPcDjg3ys31Hr7CCdmY05mirfXIwGtg7snDbjC+qit6F7ivk0vzq4VGJ7sF93MRHoYBOPlI5J+n1h27NzCMUOIJPu5YeEAX7EslvOd5/1S6YHD8LICbRNR7IAMZEYuJslRq0ZpB6xgAIItZ0Jw1Mjp81vHjrVzVua9IDFuTO3nJ1/9W6IfINA336A5Xbk61qevwsKybzARPe4EHLCnwr6drKeAN9+gS9NtmapsfPQvhm/3WTgyJ3JV1ZGGOqXx9wVdI1DY+fhUp/GQycUDrhyjHXr3Ekv/diePws0KHmCB29pR1gsF/TGJh8VbPjZwEG/Yo06aki0GauX+M446Cu0fGzED4xR2g54Woy169xJK/N8PhZKC+YohMl+RdzyiFT/fqAPyVd0/D4WWrHngVMOA1HbZGK5HvHcxSTf5CkXwOZHj+roeaeD4H/NkD484bthcmfWaL/Z6BPn6CvJlvT9PhZAGnpkTKcXKbn4sOOWMiZ/65lv4KZM8s0IkTsnU4amBw/C+Dw5pLGQEALAMcuLEFLmmIaKzj1/OyTTtp1O6z5FrbmHvqizGlxNHPqGb+gJW4mKsfix+/sFu6xyjkHY3bwZoTaZJnyskPMuXl45Pt/fbk7Z2qRp1y18xWBn7tp9cDMIZ/PvTm3Iy871H/lL7ErZgdvPlF9z3s9BQl76idq8o/UVxXdKuh8gTfoO1JVh2UF7enjcph9/TAy0wO5HZ26zM1BcHdTNfBHV239wR+YfdJVqHN7+4Dlg9KtEbOvH8b0cTkMzwranGf8BN4QdH799qLbTtTkJziFX9BdZeic5y4PRYM3Knb3nrB1JGpb++6/ffh3EOKfGZ0xW65bt3TKh04PRKtz7gR+67SdL1CdJQXNjqexpRv2XkkseoAv99QRWPHUrqNP9TV+vY0QjwvuR3RvLR7uXZ5x0xsr27Mi345zdEizLF0NzHV6MJJ/6iWtyalAKXHa1iiEZyTfuTEAsKPlxBkDOJI+oH1N49a5rfQxfheCSzegm84okjCrEphTunb3nW74iMgDgGs/WwP4lKD+s5uGpev23IFS3Kt4mRsfA/DgKLfm4cn/A7yWyKYbwuGdjncBpbipCVvmYjjzT5I4hW0VyF3NjU4bzquoCCD2hsRSqV29eMr/uhXj3pVURC2bhZDgMnNtW1b6A67oCpveBCkETrvW5BytqBRK4cm3+696LsZ8evl36A797oZtW/YixH1SAc/hCKXltb8A/iGu6KR0Wle7drh+PnsyttSQGDjqB+pRnS0FzXvdNO4r2ljhF2uWTF3gRZTncAQrKKXAqbiiIaTZP3TLJ3c37yEQmAj6Wv+1XWMPUZns1hgApAUfI/GkaQkEHL6t6AOeDbJy0ZQ6lIToVMVbdKrMajzMvubbQe7D6H4DTSCLaDt1qxQ3feKWpKx897UoCbdmgRVeg3XAUEhbxunsDcAHcUUBsfEUfSthbMlvehrsa0BWAI4funFoROQxIvZVkt/0hJR4y5WoXQ/ys0tygY9a004+4YUzjssMlq3bXSiSmK1N0OJVS75uJIOb/oZ07MF3Y1OM2HeA9JcR9AjIDoRtWE3PyyyMZKAuXberGJFEb3ehcNXiqY69HfuC0dQapetqX0CI8zzRQxmtHePD4elGQpLjoS8OvIRo2jVgjwDpCqlTToHUYUXek7tPf2G6z76ijRVeWbNkqrE4daOeg3aQh60YMzh7OcuVbZkDFgGrTfYDIHedOQZnPN+znaB90KnFIAnRxgG1jUTf9sBoao21D009iCRmyBH00aVrXjOecPhiY/nG3SMQ6RUDo0+ufOTWd0z2Yz7FX2c0TGJ0aqYVCHiOTv1zw46wlt7Rxp2BH5vux7hBuqJT6Z0l5+/L1tVONt3XxUJp+e5JiN4bX6bwqOnUTOCT9/mhUZ9vGvPZqAeA6wEUlU9PdPwqL3/b7xC9AeEyun44IrAfkaq6iW/t+HNmlMvbP2EGWIWgE3vr+/RE28zRw9KtXhnl/ssPKb7nXDza1Mnrh1po7D/n4ltis6SupvgVvzT1hRGF22aqajndJ8/5MGxQkJuvzObSIX+BORe7oDLtwZfePni07TonWUlFdG1dVXGZ/1lJVXLzq5aK6EocZCW9akTG+7s23TXOL31GktL3hbyCG8INLRGnm04Cctugse/FTr//a1/dhPIKbgiLsAKHJ2Vja3S4n/r8+ShY4bZZolrjgV8VndWwfc6LJnX1IJX1mZ/2zqsIYGs53owtgmxkmvPNrn6R4vqMGySvI1gowjgDVGPzsppmG+BJQKrr8yH3u/TeX/ZAhfGvoKW6Pj/WIZ7SE8UjZ2Dw3gXltQWm+AC27D2e3dxmxoNVEOOLXT8MYuy9VVtnLAAMMcXXzWmMS9G/iI+CGYP6/n0EzzA+fn4YxNgr8YFp5uUNSDO69DKeG9j4LUuV/SIkn0DgAjjVFntm9ZKpf2uCqwe5+ZXPipB8PP2Fsd8Qz1mYv+TE3Ee3VDH3Aa9upLw+04TD06NbgY8MUH2cE003/hW0VNdn3CAHNpd06jk7ay4gstj0p7Eh9fX581GwqqItdH3bySVkXX1VkW+JzVJZn2/T3vr0yFLgcccNRcvr0zvLzCtKRKrq8/3rv3kFW+eArIV+k818hMgjfl4ZfSHV9F2UzzGPn1eRVt8RLBSVIhG5Uen66JYghxX2KXZVXnq06sDmks6LoSeV9f0/vRv/he03OJ0AAAAASUVORK5CYII=';
	}

	private static function footer() {
		return 'data:image/png;base64,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';
	}

}