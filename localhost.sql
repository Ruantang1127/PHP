-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2018 年 06 月 04 日 09:42
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `shuishu`
-- 
CREATE DATABASE `shuishu` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `shuishu`;

-- --------------------------------------------------------

-- 
-- 表的结构 `admin`
-- 

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `admin_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `admin`
-- 

INSERT INTO `admin` VALUES (1, 'admin', 'admin');
INSERT INTO `admin` VALUES (4, 'dfg', '132');

-- --------------------------------------------------------

-- 
-- 表的结构 `article`
-- 

CREATE TABLE `article` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) collate utf8_unicode_ci default NULL COMMENT '文章标题',
  `content` text collate utf8_unicode_ci COMMENT '文章内容',
  `name` varchar(50) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- 导出表中的数据 `article`
-- 

INSERT INTO `article` VALUES (1, '西瓜', '瓜汁含瓜氨酸、丙氨酸、谷氨酸、精氨酸、苹果酸、磷酸等多种具有皮肤生理活性的氨基酸，尚含腺嘌呤等重要代谢成分，糖类、维生素、矿物质等营养物质，最容易被皮肤吸收，滋润面部皮肤、防晒、增白。 吃剩的西瓜皮切成薄片，贴于面部有斑处，可以去斑，最后再用瓜皮轻轻按摩脸部肌肤还有舒缓镇静补水的功效。', 'Watermelon');
INSERT INTO `article` VALUES (2, '猕猴桃', '猕猕猴桃含有大量的天然糖醇类物质肌醇，能有效地调节糖代谢，调节细胞内的激素和神经的传导效应，对防止糖尿病和抑郁症有独特功效。猕猴桃含有Vc、VE、VK等多种维生素，属营养和膳食纤维丰富的低脂肪食品，对减肥健美、美容有独特的功效。', 'Actinidia chinensis Planch');
INSERT INTO `article` VALUES (3, '火龙果', '火龙果中富含一般蔬果中较少有的植物性白蛋白，这种有活性的白蛋 白会自动与人体内的重金属离子结合，通过排泄系统排出体外，从而起解毒作用。此外，白蛋白对胃壁还有保护作用。 火龙果富含美白皮肤的维生素C及丰富的具有减肥、降低血糖、润肠、预防大肠癌的水溶性膳食纤维。', 'Actinidia chinensis Planch');

-- --------------------------------------------------------

-- 
-- 表的结构 `config`
-- 

CREATE TABLE `config` (
  `id` int(11) NOT NULL auto_increment COMMENT 'id',
  `slideone` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '首页幻灯1',
  `slidetwo` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '首页幻灯2',
  `slidethree` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '首页幻灯3',
  `site_title` varchar(50) collate utf8_unicode_ci default NULL COMMENT '网站标题',
  `site_url` varchar(50) collate utf8_unicode_ci default NULL COMMENT '网站地址',
  `site_logo` varchar(100) collate utf8_unicode_ci default NULL COMMENT '网站logo',
  `site_keywords` text collate utf8_unicode_ci COMMENT '网站关键字',
  `site_description` text collate utf8_unicode_ci COMMENT '网站描述',
  `site_copyright` varchar(100) collate utf8_unicode_ci default NULL COMMENT '网站版权',
  `company_name` varchar(50) collate utf8_unicode_ci default NULL COMMENT '公司名称',
  `company_phone` varchar(20) collate utf8_unicode_ci default NULL COMMENT '公司联系电话',
  `company_fax` varchar(20) collate utf8_unicode_ci default NULL COMMENT '公司传真',
  `company_email` varchar(30) collate utf8_unicode_ci default NULL COMMENT '公司邮箱',
  `company_weixin` varchar(30) collate utf8_unicode_ci default NULL COMMENT '公司微信',
  `company_ewm` varchar(100) collate utf8_unicode_ci default NULL COMMENT '公司二维码',
  `company_address` varchar(50) collate utf8_unicode_ci default NULL COMMENT '公司地址',
  `slideonems` varchar(500) collate utf8_unicode_ci NOT NULL COMMENT '焦点幻灯一内容',
  `slidetwoms` varchar(500) collate utf8_unicode_ci NOT NULL COMMENT '焦点幻灯二内容',
  `slidethreems` varchar(500) collate utf8_unicode_ci NOT NULL COMMENT '焦点幻灯三内容',
  `titlethree` varchar(50) collate utf8_unicode_ci NOT NULL COMMENT '幻灯标题3',
  `new` varchar(500) collate utf8_unicode_ci NOT NULL COMMENT '最新产品',
  `p1` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品一图片',
  `p2` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品二图片',
  `p3` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品三图片',
  `p4` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品四图片',
  `p5` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品一标题',
  `p6` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品一内容',
  `p7` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品二标题',
  `p8` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品二内容',
  `p9` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品三标题',
  `p10` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品三内容',
  `p11` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品四标题',
  `p12` varchar(200) collate utf8_unicode_ci NOT NULL COMMENT '产品四内容',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `config`
-- 

INSERT INTO `config` VALUES (1, '/shuishu/admin/kindeditor/attached/image/20170620/20170620080034_18286.jpg', '/shuishu/admin/kindeditor/attached/image/20170620/20170620080133_49935.jpg', '/shuishu/admin/kindeditor/attached/image/20170620/20170620112638_27567.jpg', '水蔬店铺', '小辣椒', '/shuishu/admin/kindeditor/attached/image/20170620/20170620115538_29349.png', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                辣椒原产于中拉丁美洲热带地区，原产国是墨西哥。15世纪末，哥伦布发现美洲之后把辣椒带回欧洲，并由此传播到世界其他地方。于明代传入中国。清陈淏子之《花镜》有番椒的记载。今中国各地普遍栽培，成为一种大众化蔬菜。辣椒是中轴胎座。辣椒为一年或多年生草本植物，叶子卵状披针形，花白色。果实大多像毛笔的笔尖，也有灯笼形、心脏形等。果实未熟时呈绿色，成熟后变为红色或黄色。一般有辣味，供食用和药用。                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                          每天一个橙子不得胃癌\r\n<br>2016-2-18<br>\r\n导语：澳大利亚联邦科学和工业研究组织发现，每天吃柑橘类水果，还可以使中风的发生率降低19%。\r\n\r\n柑橘类水果是水果第一大家族，包括橙子、橘子、柚子、葡萄柚、金橘、柠檬等多个品种。其中橙子传统上被看作是西方膳食当中维生素C的主要供应来源，也能提供相当数量的胡萝卜素和钾、钙、铁等矿物质。\r\n\r\n柑橘类水果能够抗氧化，强化免疫系统，抑制肿瘤细胞生长，并使肿瘤细胞转变成正常细胞。澳大利亚的科学家称，在所有的水果当中，柑橘类中所含 的抗氧化物质最高，其中有170种以上的植物化学物质，包括60多种黄酮类物质， 还有17种类胡萝卜素。黄酮类物质具有抗炎症、抗肿瘤、强化血管和抑制凝血的作用，类胡萝卜素则具有很强的抗氧化功效。这些综合的生理活性成分使得柑橘类水果对多种癌症的发生具有抑制作用。                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ', '                                                                           Copyright © 2048 水蔬店铺 | 0', '01林俊铭+03江帆+09赵必丰 PHP期末作品         ', '134-3531-9396', '辣椒', '2446860255@qq.com', '橙子12312312', '', '惠州市惠城区马安镇', '                                                                                                                                是芸香科柑橘属植物橙树的果实，亦称为黄果、柑子、金环、柳丁。橙子是一种柑果，是柚子(Citrus maxima)与橘子(Citrus reticulata)的杂交品种。\r\n\r\n橙子起源于东南亚。果实可以剥皮鲜食其果肉，果肉也可以用作其他食物的附加物。果实的另一个重要用途为榨汁。橙子的栽培历史悠久，以其果皮含有芳香气味，古人用它作薰香代品。湖南省长沙市郊马王堆出土的西汉古墓文物中有本属植物的种子。据考证认为是香橙的种子--较粗大且略有棱角，色泽已变灰黑--认为当时是用作薰香料陪葬并保存尸体完整的材料之一。那些种子与其他同类的物品放置在棺穴的西边，而食物类则放置于东边                                                                                       ', '                                                                                                学名:Capsicum annuum L.，茄科、辣椒属。为一年或有限多年生草本植物。果实通常呈圆锥形或长圆形，未成熟时呈绿色，成熟后变成鲜红色、绿色或紫色，以红色最为常见。辣椒的果实因果皮含有辣椒素而有辣味，能增进食欲。辣椒中维生素C的含量在蔬菜中居第一位，原产墨西哥，明朝末年传入中国。还有观赏椒，圆形，不可食用，颜色有红色、紫色等。辣椒原产于中拉丁美洲热带地区，原产国是墨西哥。15世纪末，哥伦布发现美洲之后把辣椒带回欧洲，并由此传播到世界其他地方。于明代传入中国。清陈淏子之《花镜》有番椒的记载。                                                                                                       ', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ', '西红柿', '/shuishu/admin/kindeditor/attached/image/20170620/20170620121312_44832.jpg', '/shuishu/admin/kindeditor/attached/image/20170620/20170620124041_14979.jpg', '/shuishu/admin/kindeditor/attached/image/20170620/20170620124543_28396.jpg', '/shuishu/admin/kindeditor/attached/image/20170620/20170620124547_32574.jpg', '/shuishu/admin/kindeditor/attached/image/20170620/20170620124553_25270.jpg', '西瓜', '      西瓜中含有大量的水分，是一种可以滋身补体的食物和饮料，适宜于中暑发热，汗多口渴之人食用。口渴、汗多、烦躁时，吃上一块西瓜，症状会马上改善。                                                                                                                             ', '橙子', '      解暑效果好　到了夏天，往往让人觉得暑热难耐，不免心情烦躁。黄瓜富含钙、磷、铁、胡萝卜素、维生素C生拍黄瓜 等很多营养素，黄瓜也因此而成为夏天里的最佳蔬菜。                                                                                                                     ', '青瓜', '         柑橘类水果富含维生素C及其他重要的营养素，如类黄酮、果胶、叶酸、柠檬油精，有助于降低慢性病的发病率。需要注意 的是橙子果肉所含的维生素C浓度是果汁的10倍，因此直接吃橙子要比喝果汁更有益健康。                                                                                               ', '草莓', '      现代医学研究认为，草莓对胃肠道和贫血均有一定的滋补调理作用。草莓除了可以预防坏血病外，对防治动脉硬化、冠心病也有较好的功效。草莓中的维生素及果胶对改善便秘和治疗痔疮、高血压、高脂血症均有一定效果。');

-- --------------------------------------------------------

-- 
-- 表的结构 `contact`
-- 

CREATE TABLE `contact` (
  `username` varchar(50) collate utf8_unicode_ci NOT NULL COMMENT '姓名',
  `useremail` varchar(50) collate utf8_unicode_ci default NULL COMMENT '邮箱',
  `usertitle` varchar(50) collate utf8_unicode_ci NOT NULL COMMENT '标题',
  `usermessage` varchar(100) collate utf8_unicode_ci NOT NULL COMMENT '留言',
  `time` varchar(50) collate utf8_unicode_ci NOT NULL COMMENT '时间',
  `id` int(11) NOT NULL auto_increment COMMENT 'id',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='联系我们' AUTO_INCREMENT=14 ;

-- 
-- 导出表中的数据 `contact`
-- 

INSERT INTO `contact` VALUES ('123', '23', '123', '32', '2017-06-21 16:10:37', 12);
INSERT INTO `contact` VALUES ('林俊铭', '13435319396', '这是期末作业', '这是PHP期末作业', '2017-06-21 11:14:35', 11);
INSERT INTO `contact` VALUES ('jiangfan', '18318168028', 'test', 'test', '2017-06-22 17:41:04', 13);

-- --------------------------------------------------------

-- 
-- 表的结构 `product`
-- 

CREATE TABLE `product` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) collate utf8_unicode_ci default NULL COMMENT '文章标题',
  `content` varchar(250) collate utf8_unicode_ci default NULL COMMENT '文章内容',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='产品信息表' AUTO_INCREMENT=129 ;

-- 
-- 导出表中的数据 `product`
-- 

INSERT INTO `product` VALUES (1, '树叶', 'It takes the energy from 50 leaves to produce one apple. 从50片树叶中提取的能量可供一个苹果生长。');
INSERT INTO `product` VALUES (2, '梨树', 'Pear trees are able to withstand temperature as low as -40 degrees celsius. 梨树能够承受的温度低至－40摄氏度。');
INSERT INTO `product` VALUES (3, '梨', 'The ancient Greek poet, Homer, mentions pears several times in his poems. 古希腊诗人荷马在他的诗歌中几次提到梨。');
INSERT INTO `product` VALUES (4, '李子', 'A plum''s skin is well known for having a laxative effect. 众所周知，李子的表皮具有通便作用。');
INSERT INTO `product` VALUES (5, '百香果', 'Passion fruits is sweetest when slightly wrinkled. 百香果在微微皱起时最甜。');
INSERT INTO `product` VALUES (6, '西瓜', 'Watermelons are 92% water! 西瓜的92％是水分');
INSERT INTO `product` VALUES (7, '柑橘', 'Nothing rhymes with orange. 没有什么词与柑橘(orange)押韵。');
INSERT INTO `product` VALUES (8, '苹果', 'Over 60 million tons of apples are grown worldwide annually. 每年全世界生长了超过六千万吨的苹果。');
INSERT INTO `product` VALUES (9, '苹果', 'There are approximately 10,000 varieties of apples grown around the world.全世界上大约生长着10，000种苹果。');
INSERT INTO `product` VALUES (10, '橙子', 'Limes were fed to British seamen to prevent scurvy. 英国水兵曾靠吃酸橙预防坏血病。');

-- --------------------------------------------------------

-- 
-- 表的结构 `productshow`
-- 

CREATE TABLE `productshow` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) character set utf8 default NULL,
  `link` varchar(200) character set utf8 default NULL,
  `thumbnail` varchar(500) character set utf8 default NULL,
  `order_` double default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

-- 
-- 导出表中的数据 `productshow`
-- 

INSERT INTO `productshow` VALUES (12, '橙子', '橙子', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034427_68771.jpg', 4);
INSERT INTO `productshow` VALUES (13, '黄瓜', '黄瓜', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034456_96547.jpg', 4);
INSERT INTO `productshow` VALUES (14, '草莓', '草莓', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034516_28995.jpg', 35);
INSERT INTO `productshow` VALUES (15, '猕猴桃', '猕猴桃', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034539_83775.jpg', 20);
INSERT INTO `productshow` VALUES (16, '西蓝花', '西蓝花', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034556_23452.jpg', 3);
INSERT INTO `productshow` VALUES (17, '荔枝', '荔枝', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034613_44944.jpg', 15);
INSERT INTO `productshow` VALUES (18, '蓝莓', '蓝莓', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034632_79916.jpg', 10);
INSERT INTO `productshow` VALUES (19, '柿子', '柿子', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034649_37358.jpg', 6);
INSERT INTO `productshow` VALUES (20, '茄子', '茄子', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034721_54598.jpg', 10);
INSERT INTO `productshow` VALUES (21, '火龙果', '火龙果', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034747_48009.jpg', 14);
INSERT INTO `productshow` VALUES (22, '水蜜桃', '水蜜桃', '/shuishu/admin/kindeditor/attached/image/20170625/20170625034759_59647.jpg', 25);
INSERT INTO `productshow` VALUES (23, '2134', '1234', '/shuishu/admin/kindeditor/attached/image/20180426/20180426020632_24793.jpg', 1234);

-- --------------------------------------------------------

-- 
-- 表的结构 `single`
-- 

CREATE TABLE `single` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(50) collate utf8_unicode_ci default NULL COMMENT '单页标题',
  `single_logo` varchar(300) collate utf8_unicode_ci default NULL COMMENT '产品图',
  `single_pic` varchar(300) collate utf8_unicode_ci default NULL COMMENT '缩略图',
  `single_keywords` varchar(500) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='单页信息表' AUTO_INCREMENT=4 ;

-- 
-- 导出表中的数据 `single`
-- 

INSERT INTO `single` VALUES (3, '辣椒(学名:Citrus sinensis)', '/shuishu/admin/kindeditor/attached/image/20170624/20170624180103_89126.jpg', '/shuishu/admin/kindeditor/attached/image/20170624/20170624180103_89126.jpg', '学名:Capsicum annuum L.，茄科、辣椒属。为一年或有限多年生草本植物。果实通常呈圆锥形或长圆形，未成熟时呈绿色，成熟后变成鲜红色、绿色或紫色，以红色最为常见。辣椒的果实因果皮含有辣椒素而有辣味，能增进食欲。辣椒中维生素C的含量在蔬菜中居第一位，原产墨西哥，明朝末年传入中国。还有观赏椒，圆形，不可食用，颜色有红色、紫色等。辣椒原产于中拉丁美洲热带地区，原产国是墨西哥。15世纪末，哥伦布发现美洲之后把辣椒带回欧洲，并由此传播到世界其他地方。于明代传入中国。清陈淏子之《花镜》有番椒的记载。今中国各地普遍栽培，成为一种大众化蔬菜。辣椒是中轴胎座。辣椒为一年或多年生草本植物，叶子卵状披针形，花白色。果实大多像毛笔的笔尖，也有灯笼形、心脏形等。果实未熟时呈绿色，成熟后变为红色或黄色。一般有辣味，供食用和药用。 一般所称的"辣椒"，是指这种植物的果实。别名又有红海椒、大椒、辣虎、广椒、川椒。最辣的是印度魔鬼椒。辣椒以果实、根和茎枝入药。6～7月果红时采收，晒干。');
INSERT INTO `single` VALUES (2, '橙子(学名:Citrus sinensis)', '/shuishu/admin/kindeditor/attached/image/20170624/20170624175915_27394.jpg', '/shuishu/admin/kindeditor/attached/image/20170624/20170624175927_65332.jpg', '是芸香科柑橘属植物橙树的果实，亦称为黄果、柑子、金环、柳丁。橙子是一种柑果，是柚子(Citrus maxima)与橘子(Citrus reticulata)的杂交品种。 橙子起源于东南亚。果实可以剥皮鲜食其果肉，果肉也可以用作其他食物的附加物。果实的另一个重要用途为榨汁。橙子的栽培历史悠久，以其果皮含有芳香气味，古人用它作薰香代品。湖南省长沙市郊马王堆出土的西汉古墓文物中有本属植物的种子。据考证认为是香橙的种子--较粗大且略有棱角，色泽已变灰黑--认为当时是用作薰香料陪葬并保存尸体完整的材料之一。那些种子与其他同类的物品放置在棺穴的西边，而食物类则放置于东边');

-- --------------------------------------------------------

-- 
-- 表的结构 `slide`
-- 

CREATE TABLE `slide` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) collate utf8_unicode_ci default NULL COMMENT '幻灯标题',
  `text` varchar(100) collate utf8_unicode_ci default NULL COMMENT '幻灯描述',
  `thumbnail` varchar(255) collate utf8_unicode_ci default NULL COMMENT '缩略图',
  `link` varchar(100) collate utf8_unicode_ci default NULL COMMENT '链接地址',
  `order` int(11) default NULL COMMENT '排序id',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='幻灯片' AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `slide`
-- 

