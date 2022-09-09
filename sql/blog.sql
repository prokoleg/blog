-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 09 2022 г., 12:56
-- Версия сервера: 10.8.3-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(6) NOT NULL,
  `page` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(400) NOT NULL,
  `content` varchar(15000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `page`, `title`, `description`, `content`) VALUES
(1, 'about', 'Обо мне', 'Это мой небольшой блог для себя и близких', '                                <!-- My Intro Start -->\r\n                                <div class=\"post-title margin-bottom-30\">\r\n                                    <h1>Hi, I am <span class=\"main-color\">Alex Parker</span></h1>\r\n                                    \r\n                                    <ul class=\"knowledge\">\r\n                                      <li class=\"bg-color-1\">Web Designer</li>\r\n                                      <li class=\"bg-color-4\">Web Developer</li>\r\n                                      <li class=\"bg-color-6\">Freelancer</li>\r\n                                      <li class=\"bg-color-5\">Consultant</li>\r\n                                     </ul>\r\n                                     \r\n                                   </div>\r\n                                   <!-- My Intro End -->\r\n                                    \r\n                                    \r\n                                    <p>I am in the website field since 2004 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus. <b>I am a developer</b>, et accumsan nisi. Duis laoreet pretium ultricies. Curabitur rhoncus auctor nunc congue sodales. Sed posuere nisi ipsum, eget dignissim nunc dapibus eget. Aenean elementum sollicitudin sapien ut sapien fermentum aliquet mollis. Curabitur ac quam orci sodales quam ut tempor. suspendisse, gravida in augue in, interdum <b><a href=\"?page=work\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Check out my work.\">Work</a></b> bibendum dui. Suspendisse sit amet justo sit amet diam fringilla commodo. Praesent ac magna at metus malesuada tincidunt non ac arcu. Nunc gravida eu felis vel elementum. Vestibulum sodales quam ut tempor tempor Donec sollicitudin imperdiet nec tortor nec, tempor semper metus..</p>\r\n                                   \r\n                                 \r\n                                 \r\n                                 <!-- Video Start -->\r\n                                 <div class=\"video-box margin-top-40 margin-bottom-80\">\r\n                                  <div class=\"video-tutorial\">\r\n                                   <a class=\"video-popup\" href=\"https://www.youtube.com/watch?v=O2Bsw3lrhvs\" title=\"My Thought\">\r\n                                   <img src=\"templates/default/images/pic/my-pic.png\" alt=\"\">\r\n                                   </a>                           \r\n                                  </div>\r\n                                 <p>Take a look about my thought on website design.</p>\r\n                                </div>\r\n                                <!-- Video End -->\r\n                                  \r\n                                  \r\n                                  \r\n                                  \r\n                                  <!-- My Service Start -->\r\n                                  <div class=\"post-title\">\r\n                                    <h1>My <span class=\"main-color\">Services</span></h1> \r\n                                   </div>\r\n                                   \r\n                                  <div class=\"list list-style-2 margin-top-30\">\r\n                                    <ul>\r\n                                      <li>Website Design</li>\r\n                                      <li>Website Development</li>\r\n                                      <li>Wordpress Theme Development</li>\r\n                                      <li>Mobile Apps UI/UX Design</li>\r\n                                      <li>Online Software Development</li>\r\n                                      <li>E-commerce Development</li>\r\n                                      <li>UI/UX Consulting</li>\r\n                                     </ul>\r\n                                   </div>\r\n                                   <!-- My Service End --> ');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(3) NOT NULL,
  `page` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `navlink` text NOT NULL DEFAULT 'on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `page`, `link`, `navlink`) VALUES
(1, 'Главная', 'home', 'on'),
(2, 'Обо мне', 'about', 'on'),
(3, 'Работы', 'work', 'on'),
(4, 'Контакты', 'contact', 'on'),
(5, 'Добавить', 'add', 'off'),
(6, 'single', 'single', 'off'),
(7, 'Войти', 'login', 'on'),
(8, 'Выйти', 'logout', 'on');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(6) NOT NULL,
  `header` varchar(500) NOT NULL,
  `description` varchar(400) NOT NULL,
  `post` varchar(10000) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `postdata` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `header`, `description`, `post`, `autor`, `postdata`) VALUES
(1, 'Upload from images', 'Это мой небольшой блог для себя и близких', '<h2>Каринка в посте</h2>\r\n<p><img src=\"https://irecommend.ru/sites/default/files/imagecache/copyright1/user-images/163999/nWMAwegU9ZFLkxdIuM89g.jpg\" alt=\"пусто\" width=\"640\" height=\"360\"></p>\r\n<hr>\r\n<p>картинка <s>загружена</s> размещена, все отлично!</p>', 'Олег Прокофьев', '2022-09-02 18:55:28'),
(2, 'Проверка нумерации постов', 'проверка ссылки', '<p>Это пост номер два, поэтому ссылка на него должна выглядеть так:</p>\r\n<p><code><a href=\"?post2\">http://[ваш_домен]?post2</a></code></p>', 'Олег Прокофьев', '2022-09-08 14:33:00'),
(3, 'Блог Прокофьева Олега', 'Это мой небольшой блог для себя и близких', '<p>Регулярные выражения в файле .<strong>htaccess</strong> используются в RewriteCond и RewriteRule, то есть для описания условий срабатывания правил и для описания самих правил. С помощью регулярных выражений задаются шаблоны строк. Синтаксис - такой же как в языке Perl.</p>', 'Google', '2022-09-08 14:37:11');

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id` int(2) NOT NULL,
  `usergroup` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `usergroup`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'moderator');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(110) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL DEFAULT 'Безработный',
  `role` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `firstname`, `lastname`, `work`, `role`) VALUES
(1, 'Google', '7012', 'info@blanet.ru', 'Олег', 'Прокофьев', 'Web Developer', 1),
(2, 'Пришелец', '7012', 'support@blanet.ru', 'Вася', 'Иванов', 'Безработный', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page` (`page`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page` (`page`,`link`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `role`
--
ALTER TABLE `role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
