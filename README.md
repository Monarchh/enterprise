# enterprise
>*大三下学期课程设计作业
前端来自于模板之家
软件：PhpStorm + MAMP
与数据库之间增删改查功能都可以实现，里面有与数据库之间增删改查的样代码，可以直接套用
下面是数据库的内容

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:8889
-- 生成日期： 2019-05-26 11:16:23
-- 服务器版本： 5.7.25
-- PHP 版本： 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 数据库： `enterprise`
--

-- --------------------------------------------------------

--
-- 表的结构 `announcement`
--

CREATE TABLE `announcement` (
  `id` int(8) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `announcement`
--

INSERT INTO `announcement` (`id`, `details`) VALUES
(1, '2019年4月3日周三下午5：25');

-- --------------------------------------------------------

--
-- 表的结构 `houtai`
--

CREATE TABLE `houtai` (
  `id` int(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `houtai`
--

INSERT INTO `houtai` (`id`, `username`, `password`) VALUES
(1, 'liqinghuan', '1234');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `id` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(4, '李晴欢', '525059989@qq.com', 'hello留言板');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(8) NOT NULL,
  `tittle` varchar(20) NOT NULL,
  `news` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `tittle`, `news`) VALUES
(1, '新闻1', '奥术大师大所大撒'),
(2, '新闻2', '其实打卡机还是看得见啊好看'),
(7, '新闻3', '阿萨很深刻的骄傲和会计师');

-- --------------------------------------------------------

--
-- 表的结构 `project`
--

CREATE TABLE `project` (
  `id` int(8) NOT NULL,
  `tittle` varchar(20) NOT NULL,
  `details` varchar(40) NOT NULL,
  `img` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `project`
--

INSERT INTO `project` (`id`, `tittle`, `details`, `img`) VALUES
(1, '第一项目', '第一项目简介', 1),
(3, '第二项目', '第二项目内容', 2),
(4, '第三项目', '第三项目内容', 3);

-- --------------------------------------------------------

--
-- 表的结构 `vip`
--

CREATE TABLE `vip` (
  `id` int(8) NOT NULL,
  `yh` varchar(20) NOT NULL,
  `pd` char(20) NOT NULL,
  `pd2` char(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `vip`
--

INSERT INTO `vip` (`id`, `yh`, `pd`, `pd2`, `email`) VALUES
(1, 'chenzifeng', '1234', '1234', '11111'),
(2, '李晴欢', '111', '111', '2211@qq.com'),
(3, '222', '222', '222', '11111');

--
-- 转储表的索引
--

--
-- 表的索引 `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `houtai`
--
ALTER TABLE `houtai`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `houtai`
--
ALTER TABLE `houtai`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `project`
--
ALTER TABLE `project`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `vip`
--
ALTER TABLE `vip`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
