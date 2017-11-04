<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 8,
                'title' => 'TOMWOOD',
                'description' => 'tomwood品牌落地页设计',
                'body' => 'tomwood品牌落地页设计',
                'image' => 'upload/cate_introduce/images/bb335f3240ac45f9ae099636ab83b13f.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-10-31 18:01:38',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 12,
                'title' => '巴黎Asunal展会设计',
                'description' => 'Asunal展会墙绘设计',
                'body' => 'Asunal展会墙绘设计',
                'image' => 'upload/cate_introduce/images/abbed201e975006512e66ea9e4a7cc6c.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-10-31 18:03:40',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 11,
                'title' => 'RUSEEL BRAND',
                'description' => '英格兰品牌设计',
                'body' => '英格兰品牌设计',
                'image' => 'upload/cate_introduce/images/dcdf80272bbdf84a783ad6cd704b719a.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-10-31 18:04:03',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 11,
                'title' => '懒熊体育',
                'description' => '懒熊体育响应式用户体验设计',
                'body' => '懒熊体育响应式用户体验设计',
                'image' => 'upload/cate_introduce/images/36af2edd3b15f134305d44585c0f67b9.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-10-31 18:04:35',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 12,
                'title' => 'GXG女装广告设计',
                'description' => 'GXG新加坡发布会预告广告视频',
                'body' => 'GXG新加坡发布会预告广告视频',
                'image' => 'upload/cate_introduce/images/ecf497dd3504db31fe5f6c934d2ccb41.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-10-31 18:04:59',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 8,
                'title' => '7喜两周年广告设计',
                'description' => '7喜7up两周年广告设计',
                'body' => '7喜7up两周年广告设计',
                'image' => 'upload/cate_introduce/images/a7e5e3ccea9dee7d084a5875447a16a1.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-10-31 18:05:31',
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 11,
                'title' => '第六感包装设计',
                'description' => '第六感乳胶包装设计',
                'body' => '第六感乳胶包装设计',
                'image' => 'upload/cate_introduce/images/a21bb2c365282b443959d28d25e80498.jpeg',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-10-31 18:05:54',
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 12,
                'title' => '怪兽耳机',
                'description' => '怪兽耳机产品设计',
                'body' => '怪兽耳机产品设计',
                'image' => 'upload/cate_introduce/images/3801dce8f0d19b5267d50894730482bb.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-10-31 18:06:23',
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 8,
                'title' => '板材品牌VI设计',
                'description' => 'FUSIONWOODEN谨慎标注设计',
                'body' => 'FUSIONWOODEN谨慎标注设计',
                'image' => 'upload/cate_introduce/images/1ca930796dd7435a9b5381922cac2e35.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-10-31 18:06:47',
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 8,
                'title' => '凤歌',
                'description' => 'VI设计--凤歌应用',
                'body' => '<p>VI设计--凤歌应用</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。获得6项世界之星包装奖。获国家专利20多项。中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。</p><p></p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'image' => 'upload/cate_introduce/images/e00fa0ec5f7035e142a7965260e5738e.jpeg',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/e39fca95f6d13c3c44459d4fa7882ea5.jpeg","upload\\/cate_introduce\\/banner_image\\/3510821b3eefd45ee86e212b2fdb35c4.jpeg","upload\\/cate_introduce\\/banner_image\\/7323d95cd46773ed8cd5fd5976b7ee08.jpeg"]',
                'status' => 1,
                'created_at' => '2017-10-17 16:08:48',
                'updated_at' => '2017-10-17 16:08:48',
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 8,
                'title' => '古韵',
                'description' => 'VI设计--古韵应用',
                'body' => '<p>VI设计--古韵应用</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'image' => 'upload/cate_introduce/images/c8073a820b9a9cb6b4a30e7fe80c3593.jpeg',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/5f503e5ca4072360561dd5ad1a6872b3.jpeg","upload\\/cate_introduce\\/banner_image\\/d735d2c31a7d976de33294b821b21d53.jpeg","upload\\/cate_introduce\\/banner_image\\/9d1f9544b5ca727193fad925500fb5fc.jpeg","upload\\/cate_introduce\\/banner_image\\/b4ef75ea559e2b8980e367af37f92592.jpeg","upload\\/cate_introduce\\/banner_image\\/812621832926d288c3828c697c5cd355.jpeg"]',
                'status' => 1,
                'created_at' => '2017-10-17 16:10:24',
                'updated_at' => '2017-10-17 16:10:24',
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 12,
                'title' => '果真好',
                'description' => '包装设计--果真好',
                'body' => '<p>包装设计--果真好</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'image' => 'upload/cate_introduce/images/5637f73035fd6d4a591b56ec7e9792f2.jpeg',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/3e46935aa123088f7d9019e481c33c1f.jpeg","upload\\/cate_introduce\\/banner_image\\/1b4f43cacc977b1ed8e063f4e480fac7.jpeg"]',
                'status' => 1,
                'created_at' => '2017-10-17 16:12:56',
                'updated_at' => '2017-10-17 16:12:56',
            ),
            12 => 
            array (
                'id' => 13,
                'category_id' => 12,
                'title' => '太古',
                'description' => '包装设计--太古',
                'body' => '<p>包装设计--太古</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'image' => 'upload/cate_introduce/images/8838e5fccf4cf0f437bd7fae481175b6.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/86e001188138474013ac3dee1224bd80.png","upload\\/cate_introduce\\/banner_image\\/c240d416843b823bc1b6e7f951b1c3fd.png"]',
                'status' => 1,
                'created_at' => '2017-10-17 16:14:04',
                'updated_at' => '2017-10-17 16:14:04',
            ),
            13 => 
            array (
                'id' => 14,
                'category_id' => 12,
                'title' => '土司古茶',
                'description' => '包装设计--土司古茶',
                'body' => '<p>包装设计--土司古茶</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'image' => 'upload/cate_introduce/images/2882c5f2aef38ff7b3e39f6966188728.jpeg',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/1b400b0d9d296057210058bc5fd9e1f5.jpeg","upload\\/cate_introduce\\/banner_image\\/7ee98d43f4eea45bdbd69263a16ce1cc.jpeg"]',
                'status' => 1,
                'created_at' => '2017-10-17 16:15:07',
                'updated_at' => '2017-10-17 16:15:07',
            ),
            14 => 
            array (
                'id' => 15,
                'category_id' => 12,
                'title' => '野',
                'description' => '包装设计--野',
                'body' => '<p>包装设计--野</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'image' => 'upload/cate_introduce/images/734d61532aa999e8fbf9778249b8ee62.jpeg',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/31bd625375607bcb6bebaae450567b15.jpeg","upload\\/cate_introduce\\/banner_image\\/b03ca394a301df2d928e39b04b59c763.jpeg"]',
                'status' => 1,
                'created_at' => '2017-10-17 16:16:40',
                'updated_at' => '2017-10-17 16:16:40',
            ),
            15 => 
            array (
                'id' => 16,
                'category_id' => 11,
                'title' => '生长的椅子',
                'description' => '文创设计--生长的椅子',
                'body' => '<p>文创设计--生长的椅子</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'image' => 'upload/cate_introduce/images/0e66ae25defb3ebdf1c21aac1f6c53aa.jpeg',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/bd77037a4e9652ae95b3351bef997f28.jpeg","upload\\/cate_introduce\\/banner_image\\/abb932219fa81798e2f60a01fc0283c3.jpeg"]',
                'status' => 1,
                'created_at' => '2017-10-17 16:20:40',
                'updated_at' => '2017-10-17 16:20:40',
            ),
            16 => 
            array (
                'id' => 17,
                'category_id' => 13,
                'title' => 'ISU DESIGN',
                'description' => '品·牌·故·事',
                'body' => '<p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。<br>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。<br>获得6项世界之星包装奖。<br>获国家专利20多项。<br>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。<br>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。</p><p></p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'image' => 'upload/webindex/image/68092149f8cadfc60ac9e8125dd1e935.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => '2017-10-17 16:27:15',
                'updated_at' => '2017-10-17 16:27:15',
            ),
            17 => 
            array (
                'id' => 18,
                'category_id' => 8,
                'title' => '恩施富硒茶',
                'description' => '恩施富硒茶',
                'body' => '<p class="detail-page2-left-content-artice-text">
<span>
商业的角度深入挖掘产业背后的故事，为中国商业体育产业的前进提供一线的资讯<br>
发现成功的线索，理清商业脉络。 懒熊体育力争做成体育与商业跨界的第一媒体<br>
nicedesign奈思设计为懒熊体育提供体育资讯、体育创业融投资平台的整合、用户体验设计及平台开发等服务<br>
</span>
</p>',
                'image' => 'upload/cate_introduce/images/41ad4f3579d24bd7ac1b28b428ff3e54.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => '2017-10-21 13:07:55',
                'updated_at' => '2017-11-03 16:46:41',
            ),
            18 => 
            array (
                'id' => 19,
                'category_id' => 2,
                'title' => '获奖说明',
                'description' => '获奖说明',
                'body' => '<ul>
<li>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。</li>
<li>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。</li>
<li>获得6项世界之星包装奖（联合国世界包装组织）</li>
<li>公司成员获得设计人才的国家级奖项： 2016中国光华龙腾提名奖设计业10大杰出青年（国家科技奖励办公室）</li>
<li>获得中国包装科学技术奖,公司骨干入选国家双创人才计划重点人才库。<br>获得国家专利20多项……</li>
</ul>',
                'image' => 'upload/webindex/image/a3603b0f04b60af13f5d5d2c2b3f4857.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => '2017-10-21 16:36:04',
                'updated_at' => '2017-11-03 10:33:07',
            ),
            19 => 
            array (
                'id' => 20,
                'category_id' => 9,
                'title' => 'ISU DESIGN',
                'description' => 'Company Introdution 公司介绍',
                'body' => '<p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设<br>计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。</p><p><br></p>',
                'image' => 'upload/webindex/image/9d5f34f8481d51dd786f2be8a27179d9.jpeg',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => '2017-10-21 16:53:35',
                'updated_at' => '2017-11-03 09:52:46',
            ),
            20 => 
            array (
                'id' => 21,
                'category_id' => 10,
                'title' => 'Team Introdution 团队介绍',
                'description' => '我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。',
                'body' => '<ul class="with-page3-content-team-details-title-list col-xs-12 col-sm-12 col-md-12 col-lg-12">
<li>
对待设计，我们一丝不苟，不容许有任何差池和不满意。
</li>
<li>
对待设计，我们与国际接轨，引领高水平品味。
</li>
<li>
对待设计，我们想在人前，为客户做好一切准备。
</li>
<li>
对待设计，我们致以最高的诚信和诚意。
</li>

</ul>',
                'image' => 'upload/webindex/image/930b45a9d71124c29779f7abb48fddc7.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-11-03 10:12:38',
            ),
            21 => 
            array (
                'id' => 22,
                'category_id' => 10,
                'title' => '团队简介',
                'description' => '团队简介',
                'body' => '<ul>
<li>
我们的设计师们，怀着对设计最强烈的<br>
热枕和最尊敬的态度，把最美好的设计呈现给您。
</li>
</ul>',
                'image' => 'upload/webindex/image/ae599ad0e3fb20fc56aba099c398363e.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => '2017-11-03 10:20:33',
            ),
            22 => 
            array (
                'id' => 23,
                'category_id' => 4,
                'title' => '2017你应该知道的数字营销策略',
                'description' => NULL,
                'body' => '<div class="viewpointdetail-page2-content-section-text">
最近，工作没有那么忙，终于有时间学习微信小程序的开发了。学习的过程还是比较顺利的，入门相对简单，即便没有多少前端开发经验的人也能很快上手。
现在微信小程序的资料还比较少，查看官方文档是很好的方式。微信小程序的官方文档还是很容易阅读的，并没有什么阅读障碍。在一个悠闲的午后，泡一杯清茶，开始了我的小程序之旅。花了一下午的时间把官方文档刷了一遍。接着，下载官方提供的
Demo，在微信开发者工具运行，查看每个组件的效果，使用方式，调试着看界面布局，学习API接口，顺便将弹性盒子模式复习了下。<br>
在项目中学习才是最有效的学习方式。于是，我开始思考要做些什么项目。小程序适合开发低频使用，用完即走，业务不能太复杂的应用。工具类的应用首先被考虑，其次希望能把关注点放在微信小程序的开发，最好能有现成的后台接口。确认了方向之后，最终决定仿豆瓣
电影的功能，开发一款微信小程序版的豆瓣电影。
</div>
<div class="viewpointdetail-page2-content-section-text-nav-img">
</div>
<div class="viewpointdetail-page2-content-section-text">电影首页：显示“影院热映”，“即将上映”以及“精选榜单”，测试之后发现精选榜单只有Top250的
API
接口能正常使用，于是，豆瓣Top250、口碑榜、新片榜、票房榜使用同一个 API 接口，只是请求的数据参数不一样。由于微信小程序的 request 的最大并发数是
5，所以用户进入程序时只加载“影院热映”、“即将上映”的数据，界面滑动之后再加载榜单数据。
</div>
<div class="viewpointdetail-page2-content-section-text">
更多”右侧的箭头这里并没有使用图标，而是使用样式来实现的。微信小程序对 app
的体积有限制，超过1M就不能上传。其实，不只是微信小程序，网页也一样。能用样式实现的就不用字体图标；能用字体图标实现的就不用 sprite 图；能用 sprite 图实现的就不用单一图标。样式 >
字体图标 > sprite 图 > 单一图标，不能说是绝对，但基本原则是这样。这样做的目的也是为了减少 app 的体积，减少 HTTP 的请求次数，减轻服务器的压力。
我在做代销整体视觉升级前，给自己制定了一个视觉设计的时间计划表，跟团队碰撞以后，发现之前自以为考虑的比较周全的计划，还是有很多不足的。由于自身的一开始只从视觉视角触发的局限，没办法从更大局的角度来统筹整体。项目的视觉升级不仅有品牌、视觉语言推导、业务问题的收集，还要结合用户走访、页面数据现状、内容框架的整理等更多的方面来把这件事情做全。

</div>',
                'image' => 'upload/information/image/778c5792a8b1a06300d9438dbdd21f9d.png',
                'banner_image' => '["upload\\/cate_introduce\\/banner_image\\/639cd6c8e9f8b609796bc30af41958c5.png","upload\\/cate_introduce\\/banner_image\\/78353e4cdec6ea4d0d05696f4521623b.png"]',
                'status' => 1,
                'created_at' => '2017-11-03 11:48:04',
                'updated_at' => '2017-11-03 11:48:04',
            ),
            23 => 
            array (
                'id' => 24,
                'category_id' => 4,
                'title' => '我为什么要留白',
                'description' => '我为什么要留白',
                'body' => '<p>最近几天，有多位门友向我举报，有好些号，盗用了我这个《我为什么留白》设计教程，不带署名的，看来你们都不怕封号哈~</p><p>今天发出来给大家温习一遍（其实好多人都还没看过）</p><p>这篇文章是站酷网历史以来，最高推荐排行榜上，排第二位的（当然排第一的文章也是我写的）</p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYK4qAN8mQh8HqhyibqBCruibk0HKTWPSVR1ckUGC8hYhzSTft3Eceo8VA/640?wx_fmt=png&tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p>这次我发的是适合手机看的尺寸，之前发布的是电脑上看的尺寸，还算是首发。</p><p>任何号不想被举报就在转载时候清晰注明：来自庞门正道（Artman_design）</p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwY1O9DHkW020Z4mc9PXPSnvyhMtS4MsGMX5ibKU2QRJgfurjbVSHwdnKw/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYvnNDcic9esIf9goGVmF5WutU7pP7EKicfEEZ46zARUCE80oSyrmyEB9A/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYd0JoKw1W3o0H3l3dtfjtziauvjibsOVIwicMXkVoyOUm9OVjOUvhOaYaw/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYJM6OYt7WH6ibUXpz4NriclY5NdnQ4gOxdNHZFNMUXTibHn6Mmw7MHhOaw/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYyXu62ic1YOOpdI6z8hovMpJAVAb0KLrs5bpfYJksvnicRtEBJrNgKxPw/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYBg73zNB051CYFLora1XicyccoRVcxhiaps4CQ892pzwrlb95BuT9BTbw/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYJ9uemTCekvFF8xtkaFXJzBnBTK6GKiaCdEU0A7PX0ouQG9zQBVElzIQ/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwY7dEXibt9JCKzpTu5HQ5icdFoAQzvQjVmwxY3DzzEyx52kJuiaufEeib0Sg/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYsftlW5D9EnPEopk6yiaM1s1eGOf9jbr0rVpibSxXoRfSAIXSoiaRgbicOA/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYRVLAvby37pTYpFHO1xtDmausLKwLYiaQMzVnKXd7AZFicrzoLFTuKcfA/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYZwBpu2h26o4gLGjfQ85AYOJzlu8z5FBTU9WIBhLicMOqLvtyUbLpEEw/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYp8GhcCSDAM4SmaKrYFTtlmzuuHRZv4cxfcUg6UlDsUYkv6LzxOCaHA/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYFGNnDvkwK0rOqRNuyUXfPY5RtI0sQCGTCxRYEQDFqMHtA7xvicDYx3g/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYpIVicLzy09JvmMnxNK2JXPMFlghYdaFBZJCHr9ibbCwcZW468hTQFZYw/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYasTjqeyeasSf5KqQrB9hI4auAibUSWia608etJhPUjqnwJter7QVgsicw/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYfcp5x6yMFQWBjibG2EibAX0Yg42pjYXR3uSPMqHXHB5icpMUZkGgFHHdw/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYwLVJnV0jDyBojjeLlGlpyO0mmahKcHEdT2szdInjZhgXZLsZmvEBeA/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYdhSJgTOygDAPWS67nkyzxMfK6FVL45Q3LKexjGxaicZ8odnqBxQpsfQ/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p></p><p><img src="https://mmbiz.qpic.cn/mmbiz/Rhh4hWLlib1adXTxAKpnhBiaOtAmQIFzwYibDt3r1qYNNMjHSfxKzfGGgB3trLuhcia8JJffZkx2OnqyHJ8L6ZpZNQ/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1"></p><p><br></p>',
                'image' => 'upload/information/image/9da2c7af663114f558c5394c6f249a18.jpeg',
                'banner_image' => NULL,
                'status' => 1,
                'created_at' => '2017-11-04 11:34:31',
                'updated_at' => '2017-11-04 11:34:31',
            ),
            24 => 
            array (
                'id' => 25,
                'category_id' => 4,
                'title' => '多重时尚风格汇聚 打造中国国际时装周最强京东日',
                'description' => '11月1日，2018春夏梅赛德斯-奔驰中国国际时装周迎来最强京东日秀演专场。作为本届中国国际时装周首席官方赞助商，京东携手国内轻奢高级女装品牌TRACY CHU、美国现代女装时尚品牌bebe及美国生活时尚品牌GANT一同亮相时装周舞台，完美演绎了轻奢、优雅、美式休闲等多种潮流风格。同时，京东与一系列国际知名潮牌及设计师品牌合作推出跨界联名款的JDX计划，也以全新姿态出现在京东日秀场上。',
                'body' => '<p><a href="http://www.qlwb.com.cn/">齐鲁晚报</a>讯：11月1日，2018春夏梅赛德斯-奔驰中国国际时装周迎来最强京东日秀演专场。作为本届中国国际时装周首席官方赞助商，京东携手国内轻奢高级女装品牌TRACY CHU、美国现代女装时尚品牌bebe及美国生活时尚品牌GANT一同亮相时装周舞台，完美演绎了轻奢、优雅、美式休闲等多种潮流风格。同时，京东与一系列国际知名潮牌及设计师品牌合作推出跨界联名款的JDX计划，也以全新姿态出现在京东日秀场上。</p><p>深受国际一线明星喜爱的设计师品牌TRACY CHU，近两年在本土原创界迅速崛起，创始人兼设计师朱熙越（TRACY）坚持将潮流与经典并举，打造极具辨识度的品牌风格。本季TRACY CHU新品系列以BALANCE为设计理念，设计师通过打破对称从而凸显平衡，并通过魔术般的结构处理技法，让整个系列在舒适与性感之间找到了最佳的结合点。</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/02442C078631E3548777B4B9BC0341CF35711FE4_size219_w500_h333.png"></p><p>TRACY CHU新品系列的面料以真丝、珠片、羊毛等珍贵天然材质为主，最大程度保证舒适性，并配以大量精致的手工明线针脚，让整个系列产品显得尤为精致。在颜色选择方面，设计师使用了军绿、粉、灰、白的温柔配色，意图让人们在春夏季节增加一份从容感。</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/2C5788549076BBC229B41C180B5F79C71EF4F692_size132_w500_h250.png"></p><p>京东日· TRACY CHU 2018S/S新品系列</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/609A7EBD04AC82A07D649A85DE6AE6451D429A1D_size131_w500_h250.png"></p><p>京东日· TRACY CHU 2018S/S羊驼绒针织新品系列</p><p>在本次秀演上，品牌同时发布的全球独家专利产品羊驼绒针织系列也成为了一大亮点。产品所有材料均来自秘鲁全球独家专利授权，系无染色剂、添加剂的纯天然原材料。</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/E7B91B9FDCEF5B55355826CFFE1060E3782FD3B0_size223_w500_h338.png"></p><p>创立于1976年洛杉矶的美国现代时尚女装品牌bebe，也在当天呈现了异彩纷呈的新季服饰秀演，其产品设计擅长以创意剪裁体现女性自信且美丽多变的风格，恰到好处地表现现代女性崇尚自然并独具个性的审美趋向，成为引领现代时尚潮流的美国品牌之一。本季设计中，bebe以一个美国女孩的旅程视角切入，讲述女孩一路上领略各国美景及人文差异，从中发现自我，感受自然美好，从而引发一系列的奇妙灵感的故事。</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/BD1CFC5746143CA7227BAD09D0768DDEF912454E_size133_w500_h249.png"></p><p>京东日·bebe 2018S/S新品系列</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/C4F3823ADF806A94F29A6E43B9D194202F5781B3_size145_w500_h250.png"></p><p>京东日·bebe 2018S/S新品系列</p><p>新品主打自然纤维类织物，配以充满故事性的肌理面料，大量运用条纹、植物花卉、波点、热带鸟类等图案，采取流苏、刺绣及金属等现代科技工艺，将自然风光和内心领悟一一记录。整体色彩明亮，浅蓝、湖水绿、亮黄、火焰红，以及民族风中的浅棕和烟粉，相互融合，点燃视觉神经。据悉，除了本次时装周与京东合作外，bebe于10月底已经正式入驻京东。</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/78AC8F6C4CFB7D78DAE5E69294AF5A7C6FD25A51_size188_w499_h326.png"></p><p>另一引领美国时尚的知名品牌GANT，将美国东海岸常青藤精英文化与GANT产品设计完美融合，并逐渐演变出美式运动休闲产品系列，后融入欧洲经典风格，塑造了独特的成熟、积极、健康的品牌文化，迅速被美国都市精英奉为经典，逐步成为引领美国时尚的品牌，并走向世界。</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/B67DA9A7E70123F550E1ACAA8E62320D863F7B1A_size167_w500_h259.png"></p><p>京东日·GANT 2018S/S新品系列</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/CF83183A371B2A4106ED90911432B31F8F27470B_size172_w500_h250.png"></p><p>京东日·GANT 2018S/S新品系列</p><p>GANT本季的新品设计灵感来源于春日海边盛放的花朵及茂长的植物，以海洋风情，春色之际，活力四月等作为系列主题。新品使用了大量高科技面料、全新ECO环保面料以及精细的定位条工艺来诠释别样的经典通勤服饰，结合趋势设计的多种花版，更契合了GANT这个倡导美式休闲和欧洲经典相结合的全品类生活方式的品牌。</p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/0EEF48BFAA30845CF8F0CE7BA0ECEB98E1EFAA7E_size265_w500_h333.png"></p><p><img src="http://p0.ifengimg.com/pmop/2017/1103/A96B1E1A75FF6B460D24A2AFF87201DDF0568994_size212_w500_h333.png"></p><p>京东日·JDX与MOSCHINO、McQ、Haculla等国际时尚品牌推出联名合作系列展区</p><p>值得一提的是，活动当天，京东与MOSCHINO、McQ、Haculla等一系列国际知名潮牌及设计师品牌合作推出的JDX跨界联名款产品也在现场精彩呈现。其中JDX|MOSCHINO新品在11月1日当天刚刚正式上线并全网独家销售，该系列主打多环境转化的潮流搭配，舒适、活泼、自由自在，将潮流形象和时尚主张渗透到生活的方方面面，现场展示环节引发众多达人驻足欣赏体验。</p><p>在本次时装周上，除了通过现场直播的形式，让消费者第一时间领略新品时尚潮流之外，同时也沿用目前各大秀场上十分流行的“即秀即买”模式，不但打通了与消费者的有效沟通的路径，而且真正地实现了高端时尚的快速商业落地。而这一模式目前也被公认为是时尚界向无解零售时代过度的重要启示，展现了京东对时尚的前瞻性和广阔视野；另一方面，京东在优化时尚形象的道路上也不断进行着自我更新。在即将到来的11.11大促期间，京东将通过打破消费场景壁垒，利用全渠道推广和耳目一新的营销包装，为消费者打造绝佳的购物体验。</p><p>消费升级时代，京东正不断提升在时尚行业的参与度和主动性，全方位地向消费者和社会渗透，在时尚行业全产业链的进程中保持高速前进，通过不断在前端引导消费潮流，有效实现了国内外诸多品牌与消费者的连接。作为致力于成为一个卓越的零售基础服务提供商，京东在时尚领域里，不断深入为消费者提供随时、随地、便捷、高效的服务体验，加速“无界零售”时代的到来。<a href="http://www.ifeng.com/" target="_blank"><img src="http://p2.ifengimg.com/a/2016/0810/204c433878d5cf9size1_w16_h16.png"></a></p><p><br></p><p><br></p>',
                'image' => 'upload/information/image/a59a17d9de72a369bd92352f5d47fbdf.jpeg',
                'banner_image' => NULL,
                'status' => 1,
                'created_at' => '2017-11-04 11:47:11',
                'updated_at' => '2017-11-04 12:00:44',
            ),
        ));
        
        
    }
}