<?php

use Illuminate\Database\Seeder;

class NewspostssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsposts')->insert([
            [
            'user_id' => 1,
            'content' =>'さすがです。2020年を目標に掲げる政治家は多いですが、すでに2020年以降を見据えています。日本にとって2020年は一つの通過点でしかないです。' ,
            'url' => 'https://newspicks.com/news/3099823/?ref=index',
            'title' => '【長谷部健】異能の区長が仕掛ける、2020年以降の渋谷区の挑戦',
            ],
             [
            'user_id' => 1,
            'content' =>'すげえ。 何がすげえってこれ広告だったってこと。' ,
            'url' => 'https://www.buzzfeed.com/jp/jrcentralsmartex/sekkachi-aruaru?distro_platform=twitter&utm_term=.iyjoMmzBN#.krwZVyn8e',
            'title' => '「あああもううううぅぅ！」せっかちには我慢できない時間8選',
            ],
            [
            'user_id' => 2,
            'content' =>'（ＣＮＮ） 米航空宇宙局（ＮＡＳＡ）は２１日までに、先週火星を襲った巨大な砂嵐について、「惑星全体を覆い尽くす規模」に達したと発表した。この砂嵐の影響で、ＮＡＳＡの火星探査車「オポチュニティー」は今も通信途絶の状態が続いている。
オポチュニティーの通信が途絶えたのは１０日。稼働に必要なエネルギーが無くなったためで、休眠状態に陥った。火星上は砂嵐により昼でも夜同然となっており、オポチュニティーは現在も通信途絶が続いている。' ,
            'url' => 'https://www.cnn.co.jp/fringe/35121222.html',
            'title' => '火星の砂嵐、「惑星覆い尽くす規模」に',
            ],
[
            'user_id' => 2,
            'content' =>'駿河容疑者は取り押さえられた際に右手に刃渡り17センチの包丁を
持っていたほか、３本の包丁を所持していたということです。
警察が詳しい状況や動機について調べています。' ,
            'url' => 'https://www3.nhk.or.jp/news/html/20180622/k10011491001000.html?utm_int=news_contents_news-main_004',
            'title' => '市議会に包丁男 議員脅し逮捕',
            ],
[
            'user_id' => 3,
            'content' =>'ダレノガレはだれなの' ,
            'url' => 'https://www.wwdjapan.com/637540',
            'title' => 'RIZAPのボディスタイリングCM　ダレノガレ明美がトレーニングに通う',
            ],
[
            'user_id' => 4,
            'content' =>'ジャニーズ事務所所属のアイドルグループ「NEWS」の小山慶一郎（34）が、同僚の加藤シゲアキ（30）も同席する飲み会で19歳の未成年女性にアルコールの一気飲みを煽っていたことを週刊文春6月14日号が報じました。記事を受け、2人はそれぞれ出演する番組で謝罪。ジャニーズ事務所は小山を一定期間の活動自粛、加藤を厳重注意の処分に付すことを発表しました。
　しかし、問題は小山、加藤にとどまりませんでした。週刊文春は同じくNEWSの手越祐也（30）が参加するパーティーの動画を入手。そこには昨年12月、手越と複数の若い男女がカラオケに興じる姿が記録されていました。動画には、テーブルに並んだクリスタルなどの高級シャンパンが映っています。本誌の取材により、パーティーに同席していた女性のうち2人はタレントで、当時19歳と17歳の未成年者だったことがわかりました。
　17歳だった女性の所属事務所は、小誌の取材に対し、飲酒については否定した上で、「本人がお酒を一滴も飲んでないと言っている以上、こちらとしても信じたい。ただ、18歳未満で深夜に出歩くことは都条例に抵触しますし、規律上の問題もある。そうしたことを鑑みて弊社としては6月11日付で彼女との契約を解除いたしました」と回答。' ,
            'url' => 'https://www.youtube.com/watch?v=Do7yALVLVxw',
            'title' => 'NEWS手越と未成年女性の「飲酒パーティー」動画',
            ],
[
            'user_id' => 4,
            'content' =>'なぜかわからないけどしめくくりが 「安倍政治は罪深い」・・・。' ,
            'url' => 'http://blogos.com/article/306068/',
            'title' => '関係ないことまで「安倍政治が悪い」と言うハンパない人たちが安倍政権を存続させる～小西ひろゆき議員
',
            ],
            ]);
    }
}