<?php
class convertKatakanaToHiragana
{
    public static $encoding = 'UTF-8';
    /**
     * Romanize a single Katakana character (or common combinations).
     *
     * @param $character
     * @return bool|string
     */
    public static function convertCharacter($character)
    {
        switch (true) {
            case in_array($character, ["ア", "ｱ"]):
                return "あ";
                break;
            case in_array($character, ["イ", "ｲ"]):
                return "い";
                break;
            case in_array($character, ["ウ", "ｳ"]):
                return "う";
                break;
            case in_array($character, ["エ", "ｴ"]):
                return "え";
                break;
            case in_array($character, ["オ", "ｵ"]):
                return "お";
                break;
            case in_array($character, ["カ", "ｶ"]):
                return "か";
                break;
            case in_array($character, ["キ", "ｷ"]):
                return "き";
                break;
            case in_array($character, ["ク", "ｸ"]):
                return "く";
                break;
            case in_array($character, ["ケ", "ｹ"]):
                return "け";
                break;
            case in_array($character, ["コ", "ｺ"]):
                return "こ";
                break;
            case in_array($character, ["サ", "ｻ"]):
                return "さ";
                break;
            case in_array($character, ["シ", "ｼ"]):
                return "し";
                break;
            case in_array($character, ["ス", "ｽ"]):
                return "す";
                break;
            case in_array($character, ["セ", "ｾ"]):
                return "せ";
                break;
            case in_array($character, ["ソ", "ｿ"]):
                return "そ";
                break;
            case in_array($character, ["タ", "ﾀ"]):
                return "た";
                break;
            case in_array($character, ["チ", "ﾁ"]):
                return "ち";
                break;
            case in_array($character, ["ツ", "ﾂ"]):
                return "つ";
                break;
            case in_array($character, ["テ", "ﾃ"]):
                return "て";
                break;
            case in_array($character, ["ト", "ﾄ"]):
                return "と";
                break;
            case in_array($character, ["ナ", "ﾅ"]):
                return "な";
                break;
            case in_array($character, ["ニ", "ﾆ"]):
                return "に";
                break;
            case in_array($character, ["ヌ", "ﾇ"]):
                return "ぬ";
                break;
            case in_array($character, ["ネ", "ﾈ"]):
                return "ね";
                break;
            case in_array($character, ["ノ", "ﾉ"]):
                return "の";
                break;
            case in_array($character, ["ハ", "ﾊ"]):
                return "は";
                break;
            case in_array($character, ["ヒ", "ﾋ"]):
                return "ひ";
                break;
            case in_array($character, ["フ", "ﾌ"]):
                return "ふ";
                break;
            case in_array($character, ["ヘ", "ﾍ"]):
                return "へ";
                break;
            case in_array($character, ["ホ", "ﾎ"]):
                return "ほ";
                break;
            case in_array($character, ["マ", "ﾏ"]):
                return "ま";
                break;
            case in_array($character, ["ミ", "ﾐ"]):
                return "み";
                break;
            case in_array($character, ["ム", "ﾑ"]):
                return "む";
                break;
            case in_array($character, ["メ", "ﾒ"]):
                return "め";
                break;
            case in_array($character, ["モ", "ﾓ"]):
                return "も";
                break;
            case in_array($character, ["ヤ", "ﾔ"]):
                return "や";
                break;
            case in_array($character, ["ユ", "ﾕ"]):
                return "ゆ";
                break;
            case in_array($character, ["ヨ", "ﾖ"]):
                return "よ";
                break;
            case in_array($character, ["ラ", "ﾗ"]):
                return "ら";
                break;
            case in_array($character, ["リ", "ﾘ"]):
                return "り";
                break;
            case in_array($character, ["ル", "ﾙ"]):
                return "る";
                break;
            case in_array($character, ["レ", "ﾚ"]):
                return "れ";
                break;
            case in_array($character, ["ロ", "ﾛ"]):
                return "ろ";
                break;
            case in_array($character, ["ワ", "ﾜ"]):
                return "わ";
                break;
            case in_array($character, ["ン", "ﾝ"]):
                return "ん";
                break;
            case in_array($character, ["ヴ", "ｳﾞ"]):
                return "ゔ";
                break;
            case in_array($character, ["ガ", "ｶﾞ"]):
                return "が";
                break;
            case in_array($character, ["ギ", "ｷﾞ"]):
                return "ぎ";
                break;
            case in_array($character, ["グ", "ｸﾞ"]):
                return "ぐ";
                break;
            case in_array($character, ["ゲ", "ｹﾞ"]):
                return "げ";
                break;
            case in_array($character, ["ゴ", "ｺﾞ"]):
                return "ご";
                break;
            case in_array($character, ["ザ", "ｻﾞ"]):
                return "ざ";
                break;
            case in_array($character, ["ジ", "ｼﾞ"]):
                return "じ";
                break;
            case in_array($character, ["ズ", "ｽﾞ"]):
                return "ず";
                break;
            case in_array($character, ["ゼ", "ｾﾞ"]):
                return "ぜ";
                break;
            case in_array($character, ["ゾ", "ｿﾞ"]):
                return "ぞ";
                break;
            case in_array($character, ["ダ", "ﾀﾞ"]):
                return "だ";
                break;
            case in_array($character, ["ヂ", "ﾁﾞ"]):
                return "ぢ";
                break;
            case in_array($character, ["ヅ", "ﾂﾞ"]):
                return "づ";
                break;
            case in_array($character, ["デ", "ﾃﾞ"]):
                return "で";
                break;
            case in_array($character, ["ド", "ﾄﾞ"]):
                return "ど";
                break;
            case in_array($character, ["バ", "ﾊﾞ"]):
                return "ば";
                break;
            case in_array($character, ["ビ", "ﾋﾞ"]):
                return "び";
                break;
            case in_array($character, ["ブ", "ﾌﾞ"]):
                return "ぶ";
                break;
            case in_array($character, ["ベ", "ﾍﾞ"]):
                return "べ";
                break;
            case in_array($character, ["ボ", "ﾎﾞ"]):
                return "ぼ";
                break;
            case in_array($character, ["パ", "ﾊﾟ"]):
                return "ぱ";
                break;
            case in_array($character, ["ピ", "ﾋﾟ"]):
                return "ぴ";
                break;
            case in_array($character, ["プ", "ﾌﾟ"]):
                return "ぷ";
                break;
            case in_array($character, ["ペ", "ﾍﾟ"]):
                return "ペ";
                break;
            case in_array($character, ["ポ", "ﾎﾟ"]):
                return "ぽ";
                break;
            case in_array($character, ["キャ", "ｷｬ"]):
                return "きゃ";
                break;
            case in_array($character, ["キュ", "ｷｭ"]):
                return "きゅ";
                break;
            case in_array($character, ["キョ", "ｷｮ"]):
                return "きょ";
                break;
            case in_array($character, ["シャ", "ｼｬ"]):
                return "しゃ";
                break;
            case in_array($character, ["シュ", "ｼｭ"]):
                return "しゅ";
                break;
            case in_array($character, ["ショ", "ｼｮ"]):
                return "しょ";
                break;
            case in_array($character, ["チャ", "ﾁｬ"]):
                return "ちゃ";
                break;
            case in_array($character, ["チュ", "ﾁｭ"]):
                return "ちゅ";
                break;
            case in_array($character, ["チョ", "ﾁｮ"]):
                return "ちょ";
                break;
            case in_array($character, ["ニャ", "ﾆｬ"]):
                return "にゃ";
                break;
            case in_array($character, ["ニュ", "ﾆｭ"]):
                return "にゅ";
                break;
            case in_array($character, ["ニョ", "ﾆｮ"]):
                return "にょ";
                break;
            case in_array($character, ["ヒャ", "ﾋｬ"]):
                return "ひゃ";
                break;
            case in_array($character, ["ヒュ", "ﾋｭ"]):
                return "ひゅ";
                break;
            case in_array($character, ["ヒョ", "ﾋｮ"]):
                return "ひょ";
                break;
            case in_array($character, ["ミャ", "ﾐｬ"]):
                return "みゃ";
                break;
            case in_array($character, ["ミュ", "ﾐｭ"]):
                return "みゅ";
                break;
            case in_array($character, ["ミョ", "ﾐｮ"]):
                return "みょ";
                break;
            case in_array($character, ["ギャ", "ｷﾞｬ"]):
                return "ぎゃ";
                break;
            case in_array($character, ["ギュ", "ｷﾞｭ"]):
                return "ぎゅ";
                break;
            case in_array($character, ["ギョ", "ｷﾞｮ"]):
                return "ぎょ";
                break;
            case in_array($character, ["ジャ", "ｼﾞｬ"]):
                return "じゃ";
                break;
            case in_array($character, ["ジュ", "ｼﾞｭ"]):
                return "じゅ";
                break;
            case in_array($character, ["ジョ", "ｼﾞｮ"]):
                return "じょ";
                break;
            case in_array($character, ["ヂャ", "ﾁﾞｬ"]):
                return "ぢゃ";
                break;
            case in_array($character, ["ヂュ", "ﾁﾞｭ"]):
                return "ぢゅ";
                break;
            case in_array($character, ["ヂョ", "ﾁﾞｮ"]):
                return "ぢょ";
                break;
            case in_array($character, ["ビャ", "ﾋﾞｬ"]):
                return "びゃ";
                break;
            case in_array($character, ["ビュ", "ﾋﾞｭ"]):
                return "びゅ";
                break;
            case in_array($character, ["ビョ", "ﾋﾞｮ"]):
                return "びょ";
                break;
            case in_array($character, ["ピャ", "ﾋﾟｬ"]):
                return "ぴゃ";
                break;
            case in_array($character, ["ピュ", "ﾋﾟｭ"]):
                return "ぴゅ";
                break;
            case in_array($character, ["ピョ", "ﾋﾟｮ"]):
                return "ぴょ";
                break;
            case in_array($character, ["ファ", "ﾌｧ"]):
                return "ふぁ";
                break;
            case in_array($character, ["ァ", "ｧ"]):
                return "ぁ";
                break;
            case in_array($character, ["ィ", "ｨ"]):
                return "ぃ";
                break;
            case in_array($character, ["ゥ", "ｩ"]):
                return "ぅ";
                break;
            case in_array($character, ["ェ", "ｪ"]):
                return "ぇ";
                break;
            case in_array($character, ["ォ", "ｫ"]):
                return "ぉ";
                break;
            case in_array($character, ["ッ", "ｯ"]):
                return "っ";
                break;
            default:
                return false;
        }
    }
    /**
     * The main method.
     *
     * @param $katakana
     * @return bool|string
     */
    public static function toHiragana($katakana)
    {
        // Set encoding
        mb_internal_encoding(self::$encoding);

        // Prepare output
        $output = '';
        // Clean input (can be omitted if pre-cleaned). Make sure there are no Hiragana or half-width Katakana characters
        //$katakana = mb_convert_kana($katakana, 'KC');
        // Walk through each character and check it against our list of English values. Search for a small "tsu" which
        // indicates doubled consonant, and small ya/yu/yo which indicates combo character.
        try {
            for ($i = 0; $i < mb_strlen($katakana, self::$encoding); $i++) {
                // Reset
                $nextKana = '';
                // Get current character
                $nowKana = mb_substr($katakana, $i, 1, self::$encoding);

                // Check to make sure character is valid

                if (!$nowEnglish = self::convertCharacter($nowKana)) {
                    continue;
                }

                // If there is at least one character left ...
                if (($i + 1) < mb_strlen($katakana)) {
                    // Get next character
                    $nextKana = mb_substr($katakana, $i + 1, 1);
                };

                if ($nextEnglish = self::convertCharacter($nowKana)) {
                    $output .= $nextEnglish;
                }
                //}
            }
        } catch (Exception $e) {
            echo $e;
            return false;
        }

        return $output;
    }
}
