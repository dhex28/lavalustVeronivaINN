<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/

$router->get('/home', 'Welcome::home');
$router->get('/rooms', 'Welcome::rooms');
$router->get('/addroompage', 'Welcome::addroompage');
$router->get('/contact', 'Welcome::contact');


$router->get('/', 'Welcome::register');
$router->get('/login', 'Welcome::login');
$router->get('/dashboard', 'Welcome::dashboard');
$router->post('/validate_reg', 'Welcome::register_val');
$router->post('/validate_login', 'Welcome::login_val');
$router->post('/email', 'Welcome::email');
$router->get('/verify', 'Welcome::account');
$router->post('/check', 'Welcome::check');

$router->get('/read', 'Crud::read');
$router->match('/roomread', 'Crud::roomread', 'GET|POST');


// admin
$router->get('/admin', 'Welcome::admin');
$router->match('/roomtable', 'Crud::read','GET|POST');
$router->get('/display', 'Crud::display');
// $router->match('/tableroom', 'Crud::tableroom','GET|POST');
$router->match('/add', 'Crud::add','GET|POST');
$router->get('/allrooms', 'Welcome::allrooms');
$router->get('/dashboard', 'Welcome::dashboard');
$router->get('/delete/(:any)','Crud::delete');
$router->get('edit/(:num)', 'Crud::edit');
$router->match('update/(:num)', 'Welcome::update', 'GET|POST');

//booking
$router->match('/addbook', 'Crud::addBook','GET|POST');
$router->get('/allbooking', 'Welcome::allbooking');

$router->get('/approve/(:num)', 'Crud::approve');
$router->get('/decline/(:num)', 'Crud::decline');

$router->get('/pendingBookings', 'Crud::pendingBookings');
$router->get('/approvedBookings', 'Crud::approvedBookings');
$router->get('/declinedBookings', 'Crud::declinedBookings');

