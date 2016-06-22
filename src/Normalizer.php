<?php

namespace Recca0120\Twzipcode;

class Normalizer
{
    /**
     * $countyNameMap.
     *
     * @var array
     */
    private static $countyNameMap = [
        '台北縣' => '新北市',
        '北市'  => '台北市',
        '北縣'  => '新北市',
        '台南縣' => '台南市',
        '南市'  => '台南市',
        '南縣'  => '台南市',
        '台中縣' => '台中市',
        '中市'  => '台中市',
        '中縣'  => '台中市',
        '高雄縣' => '高雄市',
        '高縣'  => '高雄市',
        '高市'  => '高雄市',
        // '台東市' => '臺東市',
    ];

    /**
     * $districtNameMap.
     *
     * @var array
     */
    private static $districtNameMap = [
        '萬里鄉'  => '萬里區',
        '金山鄉'  => '金山區',
        '板橋市'  => '板橋區',
        '汐止市'  => '汐止區',
        '深坑鄉'  => '深坑區',
        '石碇鄉'  => '石碇區',
        '瑞芳鎮'  => '瑞芳區',
        '平溪鄉'  => '平溪區',
        '雙溪鄉'  => '雙溪區',
        '貢寮鄉'  => '貢寮區',
        '新店市'  => '新店區',
        '坪林鄉'  => '坪林區',
        '烏來鄉'  => '烏來區',
        '永和市'  => '永和區',
        '中和市'  => '中和區',
        '土城市'  => '土城區',
        '三峽鎮'  => '三峽區',
        '樹林市'  => '樹林區',
        '鶯歌鎮'  => '鶯歌區',
        '三重市'  => '三重區',
        '新莊市'  => '新莊區',
        '泰山鄉'  => '泰山區',
        '林口鄉'  => '林口區',
        '蘆洲市'  => '蘆洲區',
        '五股鄉'  => '五股區',
        '八里鄉'  => '八里區',
        '淡水鎮'  => '淡水區',
        '三芝鄉'  => '三芝區',
        '石門鄉'  => '石門區',
        '大雅鄉'  => '大雅區',
        '太平市'  => '太平區',
        '大里市'  => '大里區',
        '霧峰鄉'  => '霧峰區',
        '烏日鄉'  => '烏日區',
        '豐原市'  => '豐原區',
        '后里鄉'  => '后里區',
        '石岡鄉'  => '石岡區',
        '東勢鎮'  => '東勢區',
        '和平鄉'  => '和平區',
        '新社鄉'  => '新社區',
        '潭子鄉'  => '潭子區',
        '大雅鄉'  => '大雅區',
        '神岡鄉'  => '神岡區',
        '霧峰鄉'  => '霧峰區',
        '大肚鄉'  => '大肚區',
        '沙鹿鎮'  => '沙鹿區',
        '龍井鄉'  => '龍井區',
        '梧棲鎮'  => '梧棲區',
        '清水鎮'  => '清水區',
        '大甲鎮'  => '大甲區',
        '外埔鄉'  => '外埔區',
        '大安鄉'  => '大安區',
        '永康市'  => '永康區',
        '歸仁鄉'  => '歸仁區',
        '新化鎮'  => '新化區',
        '左鎮鄉'  => '左鎮區',
        '玉井鄉'  => '玉井區',
        '楠西鄉'  => '楠西區',
        '南化鄉'  => '南化區',
        '仁德鄉'  => '仁德區',
        '關廟鄉'  => '關廟區',
        '龍崎鄉'  => '龍崎區',
        '官田鄉'  => '官田區',
        '麻豆鎮'  => '麻豆區',
        '佳里鎮'  => '佳里區',
        '西港鄉'  => '西港區',
        '七股鄉'  => '七股區',
        '將軍鄉'  => '將軍區',
        '學甲鎮'  => '學甲區',
        '北門鄉'  => '北門區',
        '新營市'  => '新營區',
        '後壁鄉'  => '後壁區',
        '白河鎮'  => '白河區',
        '東山鄉'  => '東山區',
        '六甲鄉'  => '六甲區',
        '下營鄉'  => '下營區',
        '柳營鄉'  => '柳營區',
        '鹽水鎮'  => '鹽水區',
        '善化鎮'  => '善化區',
        '大內鄉'  => '大內區',
        '山上鄉'  => '山上區',
        '新市鄉'  => '新市區',
        '安定鄉'  => '安定區',
        '仁武鄉'  => '仁武區',
        '大社鄉'  => '大社區',
        '岡山鎮'  => '岡山區',
        '路竹鄉'  => '路竹區',
        '阿蓮鄉'  => '阿蓮區',
        '田寮鄉'  => '田寮區',
        '燕巢鄉'  => '燕巢區',
        '橋頭鄉'  => '橋頭區',
        '梓官鄉'  => '梓官區',
        '彌陀鄉'  => '彌陀區',
        '永安鄉'  => '永安區',
        '湖內鄉'  => '湖內區',
        '鳳山市'  => '鳳山區',
        '大寮鄉'  => '大寮區',
        '林園鄉'  => '林園區',
        '鳥松鄉'  => '鳥松區',
        '九曲堂'  => '九曲區',
        '大樹鄉'  => '大樹區',
        '旗山鎮'  => '旗山區',
        '美濃鎮'  => '美濃區',
        '六龜鄉'  => '六龜區',
        '內門鄉'  => '內門區',
        '杉林鄉'  => '杉林區',
        '甲仙鄉'  => '甲仙區',
        '桃源鄉'  => '桃源區',
        '那瑪夏鄉' => '那瑪夏區',
        '茂林鄉'  => '茂林區',
        '茄萣鄉'  => '茄萣區',

        '台西鄉' => '臺西鄉',
        '霧台鄉' => '霧臺鄉',
        '台東市' => '臺東市',
    ];

    /**
     * $streetNameMap.
     *
     * @var array
     */
    private static $streetNameMap = [
        '龜港村' => '龜港里',
        '龜洞村' => '龜洞里',
        '龜殼村' => '龜殼里',
        '龜丹村' => '龜丹里',
        '龍船村' => '龍船里',
        '龍興村' => '龍興里',
        '龍源村' => '龍源里',
        '龍湖村' => '龍湖里',
        '龍津村' => '龍津里',
        '龍山村' => '龍山里',
        '鹿田村' => '鹿田里',
        '鹿埔村' => '鹿埔里',
        '鹽田村' => '鹽田里',
        '鹽埕村' => '鹽埕里',
        '鳳雄村' => '鳳雄里',
        '鯤鯓村' => '鯤鯓里',
        '鯤溟村' => '鯤溟里',
        '鯤江村' => '鯤江里',
        '高原村' => '高原里',
        '高中村' => '高中里',
        '馬鳴村' => '馬鳴里',
        '香洋村' => '香洋里',
        '頭社村' => '頭社里',
        '頂鹽村' => '頂鹽里',
        '頂長村' => '頂長里',
        '頂罟村' => '頂罟里',
        '頂福村' => '頂福里',
        '頂山村' => '頂山里',
        '頂安村' => '頂安里',
        '頂厝村' => '頂厝里',
        '青旗村' => '青旗里',
        '青山村' => '青山里',
        '雙春村' => '雙春里',
        '集來村' => '集來里',
        '隆盛村' => '隆盛里',
        '隆田村' => '隆田里',
        '隆本村' => '隆本里',
        '陸一村' => '陸一里',
        '阿蓮村' => '阿蓮里',
        '阿柔村' => '阿柔里',
        '關廟村' => '關廟里',
        '關山村' => '關山里',
        '長沙村' => '長沙里',
        '長榮村' => '長榮里',
        '長安村' => '長安里',
        '長坑村' => '長坑里',
        '鐵山村' => '鐵山里',
        '錦湖村' => '錦湖里',
        '金竹村' => '金竹里',
        '金砂村' => '金砂里',
        '金星村' => '金星里',
        '金山村' => '金山里',
        '重溪村' => '重溪里',
        '醒村'  => '醒里',
        '部仔村' => '部仔里',
        '達觀村' => '達觀里',
        '過港村' => '過港里',
        '逸賢村' => '逸賢里',
        '辜厝村' => '辜厝里',
        '赤西村' => '赤西里',
        '赤東村' => '赤東里',
        '赤崁村' => '赤崁里',
        '賀建村' => '賀建里',
        '貿商村' => '貿商里',
        '豐里村' => '豐里里',
        '豐華村' => '豐華里',
        '豐田村' => '豐田里',
        '豐德村' => '豐德里',
        '許厝村' => '許厝里',
        '訊塘村' => '訊塘里',
        '角宿村' => '角宿里',
        '觀亭村' => '觀亭里',
        '西連村' => '西連里',
        '西華村' => '西華里',
        '西燕村' => '西燕里',
        '西港村' => '西港里',
        '西林村' => '西林里',
        '西德村' => '西德里',
        '西庄村' => '西庄里',
        '西寮村' => '西寮里',
        '西安村' => '西安里',
        '西埔村' => '西埔里',
        '西和村' => '西和里',
        '蘇林村' => '蘇林里',
        '蘇厝村' => '蘇厝里',
        '蔗部村' => '蔗部里',
        '葉厝村' => '葉厝里',
        '萬順村' => '萬順里',
        '萬興村' => '萬興里',
        '萬福村' => '萬福里',
        '萬山村' => '萬山里',
        '萬安村' => '萬安里',
        '萬里村' => '萬里里',
        '菁湖村' => '菁湖里',
        '菁寮村' => '菁寮里',
        '菁埔村' => '菁埔里',
        '荖阡村' => '荖阡里',
        '荖濃村' => '荖濃里',
        '草山村' => '草山里',
        '茅港村' => '茅港里',
        '茄苳村' => '茄苳里',
        '茄典村' => '茄典里',
        '茂林村' => '茂林里',
        '苓和村' => '苓和里',
        '芋寮村' => '芋寮里',
        '舊社村' => '舊社里',
        '舊港村' => '舊港里',
        '舊城村' => '舊城里',
        '興糖村' => '興糖里',
        '自由村' => '自由里',
        '聯合村' => '聯合里',
        '聖賢村' => '聖賢里',
        '義里村' => '義里里',
        '義寶村' => '義寶里',
        '義合村' => '義合里',
        '維新村' => '維新里',
        '紅厝村' => '紅厝里',
        '糠榔村' => '糠榔里',
        '粗堀村' => '粗堀里',
        '米倉村' => '米倉里',
        '篤農村' => '篤農里',
        '篤加村' => '篤加里',
        '管寮村' => '管寮里',
        '筆秀村' => '筆秀里',
        '竹港村' => '竹港里',
        '竹橋村' => '竹橋里',
        '竹林村' => '竹林里',
        '竹新村' => '竹新里',
        '竹坑村' => '竹坑里',
        '竹圍村' => '竹圍里',
        '竹南村' => '竹南里',
        '科里村' => '科里里',
        '禮蚵村' => '禮蚵里',
        '福興村' => '福興里',
        '福德村' => '福德里',
        '福山村' => '福山里',
        '福安村' => '福安里',
        '福住村' => '福住里',
        '神農村' => '神農里',
        '神洲村' => '神洲里',
        '神岡村' => '神岡里',
        '社子村' => '社子里',
        '社內村' => '社內里',
        '磺濱村' => '磺濱里',
        '石碇村' => '石碇里',
        '石湖村' => '石湖里',
        '石槽村' => '石槽里',
        '石林村' => '石林里',
        '石岡村' => '石岡里',
        '石安村' => '石安里',
        '石城村' => '石城里',
        '石坑村' => '石坑里',
        '睦光村' => '睦光里',
        '看西村' => '看西里',
        '看東村' => '看東里',
        '看坪村' => '看坪里',
        '眉山村' => '眉山里',
        '白雲村' => '白雲里',
        '白樹村' => '白樹里',
        '甲南村' => '甲南里',
        '甲北村' => '甲北里',
        '甲中村' => '甲中里',
        '田尾村' => '田尾里',
        '田寮村' => '田寮里',
        '田厝村' => '田厝里',
        '田中村' => '田中里',
        '瓊林村' => '瓊林里',
        '環湖村' => '環湖里',
        '瑞平村' => '瑞平里',
        '瑞山村' => '瑞山里',
        '瑞井村' => '瑞井里',
        '王爺村' => '王爺里',
        '玉田村' => '玉田里',
        '玉港村' => '玉港里',
        '玉桂村' => '玉桂里',
        '玉成村' => '玉成里',
        '玉庫村' => '玉庫里',
        '玉峰村' => '玉峰里',
        '玉山村' => '玉山里',
        '牛埔村' => '牛埔里',
        '營西村' => '營西里',
        '營東村' => '營東里',
        '營前村' => '營前里',
        '烏樹村' => '烏樹里',
        '烏林村' => '烏林里',
        '烏塗村' => '烏塗里',
        '烏來村' => '烏來里',
        '灣丘村' => '灣丘里',
        '澄山村' => '澄山里',
        '潭頂村' => '潭頂里',
        '潭邊村' => '潭邊里',
        '漯底村' => '漯底里',
        '漁光村' => '漁光里',
        '溪南村' => '溪南里',
        '溝坪村' => '溝坪里',
        '湖山村' => '湖山里',
        '湖南村' => '湖南里',
        '湖北村' => '湖北里',
        '湖內村' => '湖內里',
        '港東村' => '港東里',
        '港後村' => '港後里',
        '港尾村' => '港尾里',
        '港口村' => '港口里',
        '港南村' => '港南里',
        '渡頭村' => '渡頭里',
        '清蓮村' => '清蓮里',
        '深水村' => '深水里',
        '深坑村' => '深坑里',
        '海山村' => '海山里',
        '海尾村' => '海尾里',
        '海寮村' => '海寮里',
        '海墘村' => '海墘里',
        '海埔村' => '海埔里',
        '泰安村' => '泰安里',
        '沙田村' => '沙田里',
        '沙崙村' => '沙崙里',
        '永隆村' => '永隆里',
        '永豐村' => '永豐里',
        '永華村' => '永華里',
        '永興村' => '永興里',
        '永樂村' => '永樂里',
        '永就村' => '永就里',
        '永富村' => '永富里',
        '永定村' => '永定里',
        '永安村' => '永安里',
        '永吉村' => '永吉里',
        '水雲村' => '水雲里',
        '水林村' => '水林里',
        '水寮村' => '水寮里',
        '水安村' => '水安里',
        '民權村' => '民權里',
        '民族村' => '民族里',
        '歸仁村' => '歸仁里',
        '武東村' => '武東里',
        '檨腳村' => '檨腳里',
        '檨林村' => '檨林里',
        '橫山村' => '橫山里',
        '橋頭村' => '橋頭里',
        '橋南村' => '橋南里',
        '樹林村' => '樹林里',
        '樟山村' => '樟山里',
        '樂業村' => '樂業里',
        '榮和村' => '榮和里',
        '楠坑村' => '楠坑里',
        '楓林村' => '楓林里',
        '梨山村' => '梨山里',
        '梓義村' => '梓義里',
        '梓平村' => '梓平里',
        '梓和村' => '梓和里',
        '梓信村' => '梓信里',
        '梅山村' => '梅山里',
        '梅子村' => '梅子里',
        '桃源村' => '桃源里',
        '果毅村' => '果毅里',
        '林安村' => '林安里',
        '林口村' => '林口里',
        '松雅村' => '松雅里',
        '松腳村' => '松腳里',
        '東興村' => '東興里',
        '東燕村' => '東燕里',
        '東河村' => '東河里',
        '東正村' => '東正里',
        '東林村' => '東林里',
        '東昇村' => '東昇里',
        '東庄村' => '東庄里',
        '東山村' => '東山里',
        '東安村' => '東安里',
        '東壁村' => '東壁里',
        '東埔村' => '東埔里',
        '東和村' => '東和里',
        '東原村' => '東原里',
        '東勢村' => '東勢里',
        '東中村' => '東中里',
        '杉林村' => '杉林里',
        '本鄉村' => '本鄉里',
        '木梓村' => '木梓里',
        '木柵村' => '木柵里',
        '望明村' => '望明里',
        '望古村' => '望古里',
        '月美村' => '月美里',
        '月眉村' => '月眉里',
        '月湖村' => '月湖里',
        '曲溪村' => '曲溪里',
        '智蚵村' => '智蚵里',
        '明和村' => '明和里',
        '昇高村' => '昇高里',
        '旭山村' => '旭山里',
        '新達村' => '新達里',
        '新莊村' => '新莊里',
        '新興村' => '新興里',
        '新社村' => '新社里',
        '新發村' => '新發里',
        '新田村' => '新田里',
        '新港村' => '新港里',
        '新復村' => '新復里',
        '新庄村' => '新庄里',
        '新市村' => '新市里',
        '新寮村' => '新寮里',
        '新威村' => '新威里',
        '新埔村' => '新埔里',
        '新嘉村' => '新嘉里',
        '新吉村' => '新吉里',
        '新光村' => '新光里',
        '文賢村' => '文賢里',
        '文武村' => '文武里',
        '文安村' => '文安里',
        '拔林村' => '拔林里',
        '成功村' => '成功里',
        '慈安村' => '慈安里',
        '忠興村' => '忠興里',
        '忠治村' => '忠治里',
        '德興村' => '德興里',
        '德松村' => '德松里',
        '復興村' => '復興里',
        '復盛村' => '復盛里',
        '復安村' => '復安里',
        '後鄉村' => '後鄉里',
        '後街村' => '後街里',
        '後港村' => '後港里',
        '後市村' => '後市里',
        '後壁村' => '後壁里',
        '彭山村' => '彭山里',
        '彌靖村' => '彌靖里',
        '彌陀村' => '彌陀里',
        '彌壽村' => '彌壽里',
        '彌仁村' => '彌仁里',
        '建山村' => '建山里',
        '廣福村' => '廣福里',
        '廣山村' => '廣山里',
        '店子村' => '店子里',
        '庄後村' => '庄後里',
        '平陽村' => '平陽里',
        '平等村' => '平等里',
        '平沙村' => '平沙里',
        '平安村' => '平安里',
        '布袋村' => '布袋里',
        '左鎮村' => '左鎮里',
        '嶺南村' => '嶺南里',
        '崙頂村' => '崙頂里',
        '崗山村' => '崗山里',
        '崑山村' => '崑山里',
        '崎頂村' => '崎頂里',
        '崎漏村' => '崎漏里',
        '崇德村' => '崇德里',
        '崁頂村' => '崁頂里',
        '峰山村' => '峰山里',
        '岡林村' => '岡林里',
        '山西村' => '山西里',
        '山腳村' => '山腳里',
        '山皮村' => '山皮里',
        '山上村' => '山上里',
        '層林村' => '層林里',
        '尖山村' => '尖山里',
        '小林村' => '小林里',
        '小崙村' => '小崙里',
        '將貴村' => '將貴里',
        '將富村' => '將富里',
        '寶隆村' => '寶隆里',
        '寶山村' => '寶山里',
        '密枝村' => '密枝里',
        '官田村' => '官田里',
        '安招村' => '安招里',
        '安定村' => '安定里',
        '安厝村' => '安厝里',
        '安加村' => '安加里',
        '宅內村' => '宅內里',
        '孝義村' => '孝義里',
        '媽廟村' => '媽廟里',
        '太爺村' => '太爺里',
        '太康村' => '太康里',
        '太平村' => '太平里',
        '天輪村' => '天輪里',
        '大農村' => '大農里',
        '大舍村' => '大舍里',
        '大社村' => '大社里',
        '大甲村' => '大甲里',
        '大田村' => '大田里',
        '大營村' => '大營里',
        '大潭村' => '大潭里',
        '大湖村' => '大湖里',
        '大洲村' => '大洲里',
        '大津村' => '大津里',
        '大林村' => '大林里',
        '大東村' => '大東里',
        '大廟村' => '大廟里',
        '大崎村' => '大崎里',
        '大崁村' => '大崁里',
        '大屯村' => '大屯里',
        '大寮村' => '大寮里',
        '大客村' => '大客里',
        '大定村' => '大定里',
        '大埤村' => '大埤里',
        '大埕村' => '大埕里',
        '大坪村' => '大坪里',
        '大同村' => '大同里',
        '大南村' => '大南里',
        '大丘村' => '大丘里',
        '多納村' => '多納里',
        '士林村' => '士林里',
        '墩西村' => '墩西里',
        '墩東村' => '墩東里',
        '墩南村' => '墩南里',
        '墩北村' => '墩北里',
        '墨林村' => '墨林里',
        '埤頭村' => '埤頭里',
        '城內村' => '城內里',
        '坪林村' => '坪林里',
        '坑口村' => '坑口里',
        '圳堵村' => '圳堵里',
        '圳前村' => '圳前里',
        '土牛村' => '土牛里',
        '土溝村' => '土溝里',
        '土庫村' => '土庫里',
        '土崎村' => '土崎里',
        '土壟村' => '土壟里',
        '土城村' => '土城里',
        '嘉賜村' => '嘉賜里',
        '嘉福村' => '嘉福里',
        '嘉田村' => '嘉田里',
        '嘉泰村' => '嘉泰里',
        '嘉民村' => '嘉民里',
        '嘉樂村' => '嘉樂里',
        '嘉昌村' => '嘉昌里',
        '嘉寶村' => '嘉寶里',
        '嘉定村' => '嘉定里',
        '嘉安村' => '嘉安里',
        '嘉吉村' => '嘉吉里',
        '嘉南村' => '嘉南里',
        '和蓮村' => '和蓮里',
        '和盛村' => '和盛里',
        '和安村' => '和安里',
        '和協村' => '和協里',
        '后里村' => '后里里',
        '吉定村' => '吉定里',
        '古亭村' => '古亭里',
        '厚里村' => '厚里里',
        '博愛村' => '博愛里',
        '南部村' => '南部里',
        '南蓮村' => '南蓮里',
        '南花村' => '南花里',
        '南興村' => '南興里',
        '南燕村' => '南燕里',
        '南溪村' => '南溪里',
        '南海村' => '南海里',
        '南洲村' => '南洲里',
        '南柳村' => '南柳里',
        '南庄村' => '南庄里',
        '南寮村' => '南寮里',
        '南安村' => '南安里',
        '南化村' => '南化里',
        '南勢村' => '南勢里',
        '南保村' => '南保里',
        '十份村' => '十份里',
        '北門村' => '北門里',
        '北花村' => '北花里',
        '北柳村' => '北柳里',
        '北庄村' => '北庄里',
        '北平村' => '北平里',
        '北寮村' => '北寮里',
        '北埔村' => '北埔里',
        '北勢村' => '北勢里',
        '勤和村' => '勤和里',
        '劉家村' => '劉家里',
        '劉厝村' => '劉厝里',
        '六龜村' => '六龜里',
        '六甲村' => '六甲里',
        '六嘉村' => '六嘉里',
        '六分村' => '六分里',
        '公館村' => '公館里',
        '八翁村' => '八翁里',
        '八甲村' => '八甲里',
        '內門村' => '內門里',
        '內郭村' => '內郭里',
        '內豐村' => '內豐里',
        '內興村' => '內興里',
        '內江村' => '內江里',
        '內東村' => '內東里',
        '內庄村' => '內庄里',
        '內南村' => '內南里',
        '光興村' => '光興里',
        '光福村' => '光福里',
        '光明村' => '光明里',
        '光定村' => '光定里',
        '光和村' => '光和里',
        '信賢村' => '信賢里',
        '信蚵村' => '信蚵里',
        '保西村' => '保西里',
        '保源村' => '保源里',
        '保寧村' => '保寧里',
        '保定村' => '保定里',
        '保吉村' => '保吉里',
        '侯伯村' => '侯伯里',
        '仕隆村' => '仕隆里',
        '仕豐村' => '仕豐里',
        '仕安村' => '仕安里',
        '仕和村' => '仕和里',
        '仁里村' => '仁里里',
        '仁愛村' => '仁愛里',
        '仁德村' => '仁德里',
        '仁和村' => '仁和里',
        '人和村' => '人和里',
        '五福村' => '五福里',
        '五甲村' => '五甲里',
        '二鎮村' => '二鎮里',
        '二行村' => '二行里',
        '二甲村' => '二甲里',
        '二溪村' => '二溪里',
        '二寮村' => '二寮里',
        '九房村' => '九房里',
        '中路村' => '中路里',
        '中賢村' => '中賢里',
        '中興村' => '中興里',
        '中程村' => '中程里',
        '中社村' => '中社里',
        '中生村' => '中生里',
        '中營村' => '中營里',
        '中湖村' => '中湖里',
        '中洲村' => '中洲里',
        '中沙村' => '中沙里',
        '中民村' => '中民里',
        '中正村' => '中正里',
        '中樞村' => '中樞里',
        '中榮村' => '中榮里',
        '中庄村' => '中庄里',
        '中崙村' => '中崙里',
        '中崎村' => '中崎里',
        '中山村' => '中山里',
        '中寮村' => '中寮里',
        '中埔村' => '中埔里',
        '中坑村' => '中坑里',
        '中和村' => '中和里',
        '下罟村' => '下罟里',
        '下福村' => '下福里',
        '下營村' => '下營里',
        '下湖村' => '下湖里',
        '上德村' => '上德里',
        '上平村' => '上平里',
        '上崙村' => '上崙里',
        '三角村' => '三角里',
        '三舍村' => '三舍里',
        '三股村' => '三股里',
        '三甲村' => '三甲里',
        '三榮村' => '三榮里',
        '三平村' => '三平里',
        '三埔村' => '三埔里',
        '三和村' => '三和里',
        '三吉村' => '三吉里',
        '三光村' => '三光里',
        '七股村' => '七股里',
        '七甲村' => '七甲里',
        '七星村' => '七星里',
    ];

    /**
     * $address.
     *
     * @var string
     */
    private $address;

    /**
     * __construct description.
     *
     * @param string $address
     */
    public function __construct($address)
    {
        $this->address = str_replace([' ', '　'], '', $address);
    }

    /**
     * normalizeCountyName.
     *
     * @param string $address
     *
     * @return string
     */
    private function normalizeCountyName($address)
    {
        return preg_replace_callback('/^('.implode('|', array_keys(self::$countyNameMap)).')/', function ($m) {
            return self::$countyNameMap[$m[1]];
        }, strtr($address, [
            '臺北'  => '台北',
            '臺南'  => '台南',
            '臺中'  => '台中',
            '臺東市' => '台東市',
            '臺東縣' => '台東縣',
        ]));
    }

    /**
     * normalizeDistrictName.
     *
     * @param string $address
     *
     * @return string
     */
    private function normalizeDistrictName($address)
    {
        return strtr($address, self::$districtNameMap);
    }

    /**
     * normalizeStreetName.
     *
     * @param string $address
     *
     * @return string
     */
    private function normalizeStreetName($address)
    {
        $counties = [
            '台中市',
            '台南市',
            '高雄市',
        ];

        if (preg_match('/'.implode('|', $counties).'/', $address) != false) {
            return strtr($address, self::$streetNameMap);
        }

        return $address;
    }

    /**
     * getAddress.
     *
     * @return string
     */
    public function getAddress()
    {
        $address = $this->normalizeCountyName($this->address);
        $address = $this->normalizeDistrictName($address);
        $address = $this->normalizeStreetName($address);

        return $address;
    }
}
