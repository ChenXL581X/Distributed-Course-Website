-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-11-07 14:41:33
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `distributed_course`
--

-- --------------------------------------------------------

--
-- 表的结构 `courseInfor`
--

CREATE TABLE IF NOT EXISTS `courseInfor` (
  `courseIntroduce` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT '课程简介',
  `teachingEnvironment` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT '教学条件',
  `teachingProgram` text COLLATE utf8_unicode_ci NOT NULL COMMENT '教学大纲'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `studentID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '学生的学号',
  `taskID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '作业的唯一标识',
  `score` int(1) NOT NULL COMMENT '分数  （0-100）编写存储过程',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '评分的时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `materialsID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '资料的唯一标识',
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '资料的名称',
  `linkPDF` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'PDF唯一标识的外键',
  `materialsType` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'C表示课件，R表示参考文献',
  PRIMARY KEY (`materialsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '外键',
  `title` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT '新闻的标题',
  `context` text COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `uploadTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '上传时间',
  `uploadPeople` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '上传人的姓名',
  PRIMARY KEY (`newsID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='新闻动态表';

-- --------------------------------------------------------

--
-- 表的结构 `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `noteID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '帖子的唯一标识',
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '帖子的标题',
  `context` varchar(800) COLLATE utf8_unicode_ci NOT NULL COMMENT '帖子的内容',
  `uploadTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发帖的时间',
  `uploadPeople` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '发帖人的姓名',
  PRIMARY KEY (`noteID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `noticeID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '唯一标识',
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `context` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `uploadTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '上传时间',
  `uploadPeople` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '上传人的姓名',
  PRIMARY KEY (`noticeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `PDF`
--

CREATE TABLE IF NOT EXISTS `PDF` (
  `fileID` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '文件的唯一标识',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '文件的名字',
  `uploadPeople` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '上传人的姓名',
  `uploadTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '上传的时间',
  PRIMARY KEY (`fileID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `replyNote`
--

CREATE TABLE IF NOT EXISTS `replyNote` (
  `noteID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '主帖子的ID',
  `replyNoteID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '回复帖子的ID',
  `context` varchar(800) COLLATE utf8_unicode_ci NOT NULL COMMENT '回复的内容',
  `replyTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '回复的时间',
  `replyPeople` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '回复人的姓名',
  PRIMARY KEY (`noteID`,`replyNoteID`),
  KEY `replyTime` (`replyTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='回复贴表';

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '外键',
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户的姓名',
  `sex` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户的性别，F为女，M为男',
  `phone` char(11) COLLATE utf8_unicode_ci NOT NULL COMMENT '手机号码',
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '邮箱地址',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='学生表';

-- --------------------------------------------------------

--
-- 表的结构 `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `taskID` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '任务的唯一标识',
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '任务的标题',
  `context` varchar(300) COLLATE utf8_unicode_ci NOT NULL COMMENT '任务的内容',
  `linkPDF` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '上传的PDF的外键',
  `startTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '任务的开始时间',
  `endTime` timestamp NULL DEFAULT NULL COMMENT '任务的结束时间',
  `taskType` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'H表示作业，E表示实验',
  PRIMARY KEY (`taskID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='作业、实验统称为任务';

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '外键',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '老师的名字',
  `sex` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT 'F为女，M为男',
  `professionalTitle` char(1) COLLATE utf8_unicode_ci NOT NULL COMMENT '职称，自己定义字段代表什么',
  `mainJob` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '在课程中的主要工作',
  `researchAchievements` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT '研究经历',
  `recordInformation` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT '获奖经历',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '账号',
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `type` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'S' COMMENT '用户类型',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='管理员创建用户的表';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
