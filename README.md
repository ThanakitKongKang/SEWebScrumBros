# CodeIgniter Project

> A sample Todo application using the CodeIgniter PHP framework, based on this [Udemy Course](https://www.udemy.com/php-mvc-framework-codeigniter-tutorial-for-beginners-project).

## Table of contents

- [Purpose](#purpose)
- [Setup](#setup)
	- [Requirements](#requirements)
	- [Instructions](#instructions)
	- [Database Structure](#database-structure)
- [TODO](#todo)
- [Notable bugs](#notable-bugs)
	- [Session persistence](#session-persistence)


## Purpose

This application was designed for a user to create projects that have associated tasks.

## Setup

### Requirements

This project was setup using MAMP on Mac OS X El Capitan 10.11.16.

- Mac OS X (tested on El Capitan 10.11.16)
- [CodeIgniter 3.1.6](https://www.codeigniter.com) (included in this repository)
- [MAMP](https://www.mamp.info/en/downloads)
- PHP 5.6
- MySQL 5.6.35
- Apache 2.2.32
- phpMyAdmin 4.7.3

### Instructions

1. [Install MAMP](https://www.mamp.info/en/downloads)
1. Clone or download this repository
1. Move the repository folder to the `/Applications/MAMP/htdocs` folder on your local hard drive
1. **[Optional]** - Go to the `/Applications/MAMP/bin/php` folder and rename `php7.1.8` to `OLD_php7.1.8` (in order to use PHP 5.6.31 according to [this post](https://stackoverflow.com/a/16785309))
1. Start the MAMP application
1. In a browser, navigate to http://localhost:8888/codeigniter-project

### Database Structure

```
-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2017 at 06:50 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `errand_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `due_date` date NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_complete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
```

## TODO

1. Improve UI
1. Refactor views
1. Test on other devices/browser *(currently only tested in Chrome on Mac OS X)*
1. Make the app publicly available via Heroku

## Notable bugs

### Session persistence

There was an unknown bug with the session that caused stored values not to be persisted on the next HTTP request.

**Attempts:**

1. Google searches
2. Switched from file session store to database session store
3. Restart the server
4. Starting a new project from scratch

In all attempts, the problem persisted, but the session did not.

**Solution:**

I upgraded from CodeIgniter 3.0.1 to 3.1.6 and the problem seemed to be resolved.
