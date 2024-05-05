<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    
    @font-face {
    font-family: 'Nikosh';
    src: url('{{ public_path("fonts/Nikosh.ttf") }}') format('truetype');
  }

  </style>
</head>
<body>
        

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
        <table width='100%' border='1' id="table1" align='center'>
        <tr>
            <td>
                <table class='abc' width='100%' border='0' align='center'>
                    <tr>
                        <td>
                            <div style='padding-left:18px;padding-right:18px;'>
                                <div align='center' class="BN" style='font-family:Nikosh; font-size:16px; font-weight:bold;'>ঢাকা ইলেকট্রিক সাপ্লাই কোম্পানি লিঃ(ডেসকো)</div>
                                <div align='center' class="BN" style='font-family:Nikosh; font-size:10px padding-top:2px;padding-bottom:0px;'><u>কর্মকর্তা/ কর্মচারীর পদোন্নতির প্রেক্ষিতে বেতন কাঠামো-2016 অনুযায়ী বেতন নির্ধারণী বিবরণী</u></div>
                            </div>
                            <br>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                                <tr>
                                    <td align='left' style='font-family:Nikos; font-size:12px'>সূত্রঃ স্মারক নং-27.24.0000.067.06.025.19.256 &nbsp; তারিখঃ ৩১-০৫-২০২২</td>
                                </tr>
                            </table>
                            <img src='line1.jpg' width='100%'>
                            <!-- Starting Main detail data-->
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:Nikos; font-size:12px'>১।</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>কর্মকর্তা/কর্মচারীর নাম ও পদবি (আইডি সহ)</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>: {{$name4}} (আইডি {{$emp_id2}} )</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:Nikos; font-size:12px'>২।</div></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>অফিস/দপ্তরের নাম</div></td>    
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$office5}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:Nikos; font-size:12px'>৩।</div></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>জন্ম তারিখ (দিন-মাস-বছর)</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$birtdate6}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:Nikos; font-size:12px'>৪।</div></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>কোম্পানিতে ১ম যোগদানের তারিখ</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$firstjoiningdate7}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20' colspan=\"2\"><div class="text-left" style='font-family:Nikos; font-size:12px'>৫।</div></td>    
                                        <td width='10'><div class="text-left" style='font-family:Nikos; font-size:12px'>বর্তমানে পদোন্নতির তথ্যাবলী</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'></div></td>
                                    </tr> 
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:Nikos; font-size:12px'></div></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>(ক) পদের নাম</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$postname12}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>(খ) যোগদানের তারিখ</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$joindate15}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>(গ) প্রারম্ভিক মূলবেতন</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$basic14}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>(ঘ) প্রাপ্ত গ্রেড</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$grade13}}</div></td>
                                    </tr> 
                                    <tr>
                                        <td colspan=\"2\"><div class="text-left" style='font-family:Nikos; font-size:12px'>৬।</div></td>    
                                        <td width='10'><div class="text-left" style='font-family:Nikos; font-size:12px'>পদোন্নতি পদের অব্যবহিত পূর্ব পদের তথ্যাবলী</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'></div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:Nikos; font-size:12px'></div></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>(ক) পদের নাম</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$pastpost8}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>(খ) যোগদানের তারিখ</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$pastpostjoindate9}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>(গ) প্রারম্ভিক মূলবেতন</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$pastpostbasic10}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>(ঘ) আহরিত মূলবেতন</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$pastpostgrossbasic11}}</div></td>
                                        </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>(ঙ) প্রাপ্ত গ্রেড</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$grade3}}</div></td>
                                    </tr>
                                    <tr><td ccolspan="4"> &nbsp;</td></tr>
                                    <tr>
                                        <td width='20' style=\"vertical-align:top\"><div class="text-left"  style='font-family:Nikos; font-size:12px'>৭।</div></td>    
                                        <td width='250' style=\"vertical-align:top\"><div class="text-left" style='font-family:Nikos; font-size:12px'>পদোন্নতিপ্রাপ্ত পদে মূলবেতন অব্যবহিত পূর্ব পদের আহরিত মূলবেতন অপেক্ষা অধিক হওয়ায় পদোন্নতি প্রাপ্ত পদে মূলবেতন</div></td>
                                        <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$sl16}}</div></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"> &nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width='20' style=\"vertical-align:top\"><div class="text-left" style='font-family:Nikos; font-size:12px'>৮।</div></td>    
                                        <td width='250' style=\"vertical-align:top\"><div class="text-left" style='font-family:Nikos; font-size:12px'>পদোন্নতিপ্রাপ্ত পদে মূলবেতন অব্যবহিত পূর্ব পদের আহরিত মূলবেতন অপেক্ষা কম হওয়ায় আহরিত মূলবেতনের অধিক এবং পদোন্নতি প্রাপ্ত পদে পরবর্তী ধাপে নির্ধারিত মূলবেতন</div></td>
                                        <td width='250' style=\"vertical-align:text-bottom\"><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$sl17}}</div></td>
                                    </tr>
                                    <tr> <td colspan="4"> &nbsp;</td></tr>
                                    <tr>
                                        <td width='20' style=\"vertical-align:top\"><div class="text-left" style='font-family:Nikos; font-size:12px'>৯।</div></td>    
                                        <td width='250' style=\"vertical-align:top\"><div class="text-left" style='font-family:Nikos; font-size:12px'>বার্ষিক বেতন প্রবৃদ্ধি (তারিখ ও মূলবেতন) <br/><span class="text-left" style='font-family:Nikos; font-size:12px'>[একই সময়ে, একই পদে যোগদানকৃত কিন্তু পদোন্নতি না হওয়া সত্ত্বেও তাদের হতে মূলবেতন কম হওয়ায় বেতন বৈষম্য দূরীকরণে	সরকারী প্রজ্ঞাপন অনুযায়ী] </span></div></td>
                                        <td width='250' style=\"vertical-align:text-top\">
                                            <table width='100%'> 
                                                <tr>
                                                    <td width='55%' style=\"vertical-align:top\"> <div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;'>: {{$sl182}} &nbsp; ({{$sl181}})</div> </td>
                                                    <td width='45%' class="text-left">
                                                    </td>
                                                </tr> 
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"> &nbsp;</td>
                                    </tr>

                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:Nikos; font-size:12px'>১০।</div></td>    
                                        <td width='250'><div class="text-left" style='font-family:Nikos; font-size:12px'>পরবর্তী বার্ষিক বেতন বৃদ্ধির তারিখ</div></td>
	                                    <td width='250'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px'>: {{$sl19}}</div></td>   
                                    </tr>

                                    <tr>
                                        <td colspan=4>&nbsp;</td>      
                                    </tr>	
                                    <tr>
                                        <td >&nbsp;</td>      
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <table width='100%'>
                                                <tr>
                                                    <td width='35%' class="text-center" style='font-family:Nikos; font-size:12px'><strong>(মোঃ মোস্তফা আদনান) </strong> <br> সহকারি ব্যবস্থাপক (অভ্যন্তরীণ নিরীক্ষা) <br> ও সদস্য, Pay Fixation কমিটি </td>
                                                    <td width='35%' class="text-center" style='font-family:Nikos; font-size:12px'><strong>(প্রকৌঃ আসিফ খাইরুজ্জামান)</strong> <br> উপ-বিভাগীয় প্রকৌশলী (আইসিটি) <br> ও সদস্য, Pay Fixation কমিটি </td>
                                                    <td width='30%' class="text-center" style='font-family:Nikos; font-size:12px'><strong>(মোঃ ফরিদুজ্জামান) </strong> <br> উপ-ব্যবস্থাপক (অর্থ) <br> ও সদস্য, Pay Fixation কমিটি </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=4>&nbsp;</td>      
                                    </tr>
                                    <tr>
                                        <td colspan=4>&nbsp;</td>      
                                    </tr>
                                    <tr>
                                        <td colspan="4">
		                                    <table width=100%>
			                                    <tr>
			                                        <td width=45% class="text-center" style='font-family:Nikos; font-size:12px text-align: center;'><strong>(রিয়াজুল হোসেন তালুকদার)</strong> </br> ব্যবস্থাপক ( পারসোনাল ম্যানেজমেন্ট) </br> ও সদস্য, Pay Fixation কমিটি </td>
				                                    <td  class="text-center" style='font-family:Nikos; font-size:12px text-align: center;'><strong> (মোঃ আলমগীর হোছাইন) </strong> </br> উপ-মহাব্যবস্থাপক (অর্থ) </br> ও আহবায়ক, Pay Fixation কমিটি </td>
			                                        </tr>
		                                    </table>
                                        </td>       
                                    </tr>
                                    <tr>
                                        <td colspan=4><img src='line1.jpg' width='100%'></td>      
                                    </tr>
                                    <tr>
                                    <td colspan="4" style="text-align: center;">
                                <p class="mb-4" style="font-family:Nikos; font-size: 16px; text-decoration: underline;">অঙ্গীকারনামা</p>
                                <p class="mb-4" style="font-family:Nikos; font-size: 14px;">আমি এই মর্মে অঙ্গীকার করিতেছি যে, উপরোক্ত বেতন নির্ধারণে আমার প্রাপ্ত বেতন কম/বেশী নির্ধারিত হইয়া থাকিলে উহা নিয়ম অনুযায়ী সমন্বয় সাধনে আমার কোন প্রকার আপত্তি থাকিবে না।</p>
                            <br>
                        </td>
                    </tr>
                    <tr>
  	                        <td colspan="4"><table width=100%><tr><td style="font-family:Nikos; font-size: 14px;" width=40%>নামঃ&nbsp;{{$name4}} </td>
	                        <td style="font-family:Nikos; font-size: 14px;" width=30%>পদবিঃ&nbsp; {{$postname12}} </td>
	                        <td style="font-family:Nikos; font-size: 14px;" >স্বাক্ষরঃ________________________ </td></tr></table></td>
                    </tr>

                                </tbody>
                            </table>
                        </td>
                    </tr>
                    
                </table>
            </td>
        </tr>
    </table>
    
        </div>
        
    </div>
    
</div>



</body>
</html>