CREATE TABLE `mall_demo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `mall_admin_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '后端用户主键ID',
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '用户密码',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态码 1正常 0待审核，99删除',
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  `last_login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后登录时间',
  `last_login_ip` varchar(100) NOT NULL COMMENT '最后登录IP',
  `operate_user` varchar(100) NOT NULL COMMENT '操作人',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE `mall_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `username` varchar(100) NOT NULL DEFAULT '' COMMENT '用户名',
  `phone_number` varchar(20) NOT NULL COMMENT '手机号',
  `email` varchar(100) NOT NULL COMMENT '邮箱',
  `password` char(32) NOT NULL DEFAULT '',
  `ltype` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '登录方式 默认0 手机号码登录 1用户名密码登录',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '会话保存天数',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '性别',
  `create_time` datetime DEFAULT NULL COMMENT '添加时间',
  `update_time` datetime DEFAULT NULL COMMENT '更新时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `operate_user` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `usernme` (`username`),
  KEY `phone_number` (`phone_number`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `mall_user` 
ADD COLUMN `token` varchar(255) NULL DEFAULT NULL COMMENT 'token' AFTER `operate_user`;

CREATE TABLE `mall_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '类名',
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '图标',
  `operate_user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `order` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;