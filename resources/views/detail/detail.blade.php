@extends('Layout.dashboard')
@section('content')

<!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 text-center">
                            <p class="mb-4" style="font-size:15px;">ঢাকা ইলেকট্রিক সাপ্লাই কোম্পানি লিঃ(ডেসকো)</p>
                            <p class="mb-4" style=" text-decoration: underline; font-size:13px;">কর্মকর্তা/ কর্মচারীর পদোন্নতির প্রেক্ষিতে বেতন কাঠামো-2016 অনুযায়ী বেতন নির্ধারণী বিবরণী</p>
                            <br>
                            <h6 class="m-0 font-weight-bold text-primary text-left"><span>স্মারক নং-27.24.0000.067.06.025.19.84</span><span class="text-right">তারিখঃ০৬/০৩/২০১৯</span></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:NikoshBAN;
	                                        font-size:20px;'>১।</div></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>কর্মকর্তা/কর্মচারীর নাম ও পদবি (আইডি সহ)</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->name4}} (আইডি {{$user_object->emp_id2}} )</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'></div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->pastpost8}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>২।</div></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>অফিস/দপ্তরের নাম</div></td>
                                        
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->office5}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>৩।</div></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>জন্ম তারিখ (দিন-মাস-বছর)</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->birtdate6}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>৪।</div></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>কোম্পানিতে ১ম যোগদানের তারিখ</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->firstjoiningdate7}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20' colspan=\"2\"><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>৫।</div></td>    
                                        <td width='10'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>বর্তমানে পদোন্নতির তথ্যাবলী</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'></div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'></div></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>(ক) পদের নাম</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->postname12}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>(খ) যোগদানের তারিখ</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->joindate15}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>(গ) প্রারম্ভিক মূলবেতন</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->basic14}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>(ঘ) প্রাপ্ত গ্রেড</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->grade13}}</div></td>
                                    </tr>
                                    <tr>
                                        <td colspan=\"2\"><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>৬।</div></td>    
                                        <td width='10'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>পদোন্নতি পদের অব্যবহিত পূর্ব পদের তথ্যাবলী</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'></div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'></div></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>(ক) পদের নাম</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->pastpost8}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>(খ) যোগদানের তারিখ</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->pastpostjoindate9}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>(গ) প্রারম্ভিক মূলবেতন</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->pastpostbasic10}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>(ঘ) আহরিত মূলবেতন</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->pastpostgrossbasic11}}</div></td>
                                    </tr>
                                    <tr>
                                        <td width='20'></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>(ঙ) প্রাপ্ত গ্রেড</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->grade3}}</div></td>
                                    </tr>
                                    <tr><td colspan=\"4\"> &nbsp;</td></tr>
                                    <tr>
                                        <td width='20' style=\"vertical-align:top\"><div class="text-left"  style='font-family:NikoshBAN; font-size:20px;'>৭।</div></td>    
                                        <td width='400' style=\"vertical-align:top\"><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>পদোন্নতিপ্রাপ্ত পদে মূলবেতন অব্যবহিত পূর্ব পদের আহরিত মূলবেতন অপেক্ষা অধিক হওয়ায় পদোন্নতি প্রাপ্ত পদে মূলবেতন</div></td>
                                        <td width='350'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->sl16}}</div></td>
                                    </tr>
                                    <tr><td colspan=\"4\"> &nbsp;</td></tr>
                                    <tr>
                                        <td width='20' style=\"vertical-align:top\"><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>৮।</div></td>    
                                        <td width='400' style=\"vertical-align:top\"><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>পদোন্নতিপ্রাপ্ত পদে মূলবেতন অব্যবহিত পূর্ব পদের আহরিত মূলবেতন অপেক্ষা কম হওয়ায় আহরিত মূলবেতনের অধিক এবং পদোন্নতি প্রাপ্ত পদে পরবর্তী ধাপে নির্ধারিত মূলবেতন</div></td>
                                        <td width='350' style=\"vertical-align:text-bottom\"><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->sl17}}</div></td>
                                    </tr>
                                    <tr><td colspan=\"4\"> &nbsp;</td></tr>
                                    <tr>
                                        <td width='20' style=\"vertical-align:top\"><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>৯।</div></td>    
                                        <td width='400' style=\"vertical-align:top\"><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>বার্ষিক বেতন প্রবৃদ্ধি (তারিখ ও মূলবেতন) <br/><span class="text-left" style='font-family:NikoshBAN; font-size:14px;'>[একই সময়ে, একই পদে যোগদানকৃত কিন্তু পদোন্নতি না হওয়া সত্ত্বেও তাদের হতে মূলবেতন কম হওয়ায় বেতন বৈষম্য দূরীকরণে	সরকারী প্রজ্ঞাপন অনুযায়ী] </span></div></td>
                                        <td width='350' style=\"vertical-align:text-top\">
                                           <table width='100%'> 
                                                <tr>
                                                    <td width='190' style=\"vertical-align:top\"> <div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;'>{{$user_object->sl182}} &nbsp; ({{$user_object->sl181}})</div> </td>
                                                    <td width='150' class="text-left">

                                                    @if ($user_object->sl20 != '0') সরকারী প্রজ্ঞাপন অনুযায়ী পূর্বের পদের বেতন প্রবৃদ্ধি তারিখ বহাল রাখা হলো। @endif 
                                                    </td>
                                                </tr> 
                                         </table>
                                        </td>
                                    </tr>
                                    <tr><td colspan=\"4\"> &nbsp;</td></tr>
                                    <tr>
                                        <td width='40'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>১০।</div></td>    
                                        <td width='400'><div class="text-left" style='font-family:NikoshBAN; font-size:20px;'>পরবর্তী বার্ষিক বেতন বৃদ্ধির তারিখ</div></td>
	                                    <td width='330'><div class="text-left" style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px;'>{{$user_object->sl19}}</div></td>   
                                    </tr>

                                    <tr>
                                        <td colspan=4>&nbsp;</td>      
                                    </tr>	
                                    <tr>
                                        <td colspan=4>&nbsp;</td>      
                                    </tr>
                                    <tr>
  	                                    
		                                    <table width=100%>
			                                    <tr>
				                                    <td width=35% class="text-center" style='font-family:NikoshBAN; font-size:18px;'><strong>(মোঃ মোস্তফা আদনান) </strong> </br>	সহকারি ব্যবস্থাপক (অভ্যন্তরীণ নিরীক্ষা)</br>ও সদস্য, Pay Fixation কমিটি </td>
				                                    <td width=30% class="text-center" style='font-family:NikoshBAN; font-size:18px;'><strong>(প্রকৌঃ আসিফ খাইরুজ্জামান)</strong> </br> উপ-বিভাগীয় প্রকৌশলী (আইসিটি)  </br> ও সদস্য, Pay Fixation কমিটি </td>
				                                    <td  class="text-center" style='font-family:NikoshBAN; font-size:18px;'><strong>(মোঃ ফরিদুজ্জামান) </strong></br> উপ-ব্যবস্থাপক (অর্থ) </br> ও সদস্য, Pay Fixation কমিটি </td>
			                                    </tr>
		                                    </table>
	                                    
                                    </tr>
                                    <tr>
                                        <td colspan=4>&nbsp;</td>      
                                    </tr>
                                    <tr>
                                        <td colspan=4>&nbsp;</td>      
                                    </tr>
                                    <tr>
  	                                   
		                                <table width=100%>
			                                <tr>
			                                    <td width=45% class="text-center" style='font-family:NikoshBAN; font-size:18px;'><strong>(রিয়াজুল হোসেন তালুকদার)</strong> </br> ব্যবস্থাপক ( পারসোনাল ম্যানেজমেন্ট) </br> ও সদস্য, Pay Fixation কমিটি </td>
				                                <td  class="text-center" style='font-family:NikoshBAN; font-size:18px;'><strong> (মোঃ আলমগীর হোছাইন) </strong> </br> উপ-মহাব্যবস্থাপক (অর্থ) </br> ও আহবায়ক, Pay Fixation কমিটি </td>
			                                </tr>
		                                </table>
	                        
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-header py-3 text-center">
                            <p class="mb-4" style="font-size: 25px; text-decoration: underline;">অঙ্গীকারনামা</p>
                            <p class="mb-4">আমি এই মর্মে অঙ্গীকার করিতেছি যে, উপরোক্ত বেতন নির্ধারণে আমার প্রাপ্ত বেতন কম/বেশী নির্ধারিত হইয়া থাকিলে উহা নিয়ম অনুযায়ী সমন্বয় সাধনে আমার কোন প্রকার আপত্তি থাকিবে না।</p>
                            <br>
                            <table class="table table-borderless">
                                <thead>
                                <tr>
  	                                    <td colspan=\"4\"><table width=100%><tr><td width=40%>নামঃ&nbsp;{{$user_object->name4}} </td>
	                                    <td width=30%>পদবিঃ&nbsp; {{$user_object->postname12}} </td>
	                                    <td >স্বাক্ষরঃ________________________ </td></tr></table></td>
                                </tr>
                                </thead>
                            </table>
                            <button type="button" class="btn btn-primary" method="get" action="/print_detail">Print</button>
                        </div>
                    </div>

                </div>

@endsection
