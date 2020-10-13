<?php 
	session_start();
	echo 'Welcome to page #1';
	$_SESSION['color'] = 'green';
	$_SESSION['animal'] = 'cat';
	$_SESSION['time'] = time();
	echo '<br> <a href="page2.php">page 2</a>';
 ?>

<!-- 
เมื่อ page1.php ทำงานเเล้ว จะมีการกำหนด
ตัวเเปร $_SESSION  เป็นตัวเเปรเฉพาะของ Session 

โดยเป็นตัวเเปร array เก็บค่า color , animal , time 
เมื่อคลิกไป page2.php จะได้ผลลัพธ์ของ session page1.php


-->


<!-- function ที่เกี่ยวกับ Session 
session มีคุณสมบัติใช้ส่งค่า ตัวเเปร ที่สร้างจากไฟล์หนึ่งไปเเสดงผลอีกไฟล์ได้
สามารถติดตามเเละตรวจสอบ ผู้ใช้ได้ 

ใน php มี function ใช้ seesion คือ

session_start() ใช้กำหนดให้ข้อมูลของ Session เริ่มทำงาน
session_destroy() ใช้ทำลายข้อมูลทั้งหมดของ Session




-->
