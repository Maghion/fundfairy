<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function index(): view
    {
        $about = "
<h1 class='text-3xl font-bold text-fuchsia-950 border-b pb-2'> About Us</h1>
<br>
<p> Welcome to FundFairy, where dreams take flight with the power of community-driven funding!

At FundFairy, we believe every entrepreneur deserves a chance to succeed. Whether you're launching a startup, expanding your small business, or need a boost to bring your vision to life, we're here to connect you with the support you need.</p>
<br>
<h2>How It Works</h2>
<br>
<ul>
    <li><b>Register Your Business</b> <p> - Create a profile, share your story, and explain how funding will help your business grow.</p></li><br>
    <li><b>Receive Donations</b> <p> - Other users can browse your request and contribute to your success.</p></li><br>
    <li><b>Give Back</b> <p> - Support fellow entrepreneurs by donating to their business dreams.</p></li><br>
    <li><b>Anonymous Giving</b> <p> - Want to make a difference without the spotlight? Donate anonymously and help fuel innovation.</p></li><br>
</ul>
<br>
<h2>Why FundFairy?</h2>
<br>
<p>Unlike traditional funding platforms, FundFairy is designed for businesses of all sizes and industries—whether you're a local bakery, a tech startup, or an independent artist. We make fundraising simple, transparent, and accessible, so you can focus on what matters most—growing your business.</p>
<br>
<p>Join FundFairy today and be part of a community that believes in <b>turning ideas into reality, one donation at a time!</b></p>
";
        return view('about/index')->with('about', $about);
    }



}
