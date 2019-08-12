<div class="container ">
    <div class="row ">


        <div class="span8">
            <div class="widget">
                <h5 class="widgetheading">Browse pages </h5>
                <p>বৃষ্টির দিনে বাইরে যেতে নিশ্চয়ই পানিরোধী স্মার্টফোনের কথা মনে হয়। কারণ, অনেক দামী স্মার্টফোন ভিজে নষ্ট হয়ে যেতে পারে। কিন্তু বাজারে এখন পানিরোধী (ওয়াটারপ্রুফ) ও পানি প্রতিরোধী

                    <a href="http://www.focus.com.bd/page/1">More</a>
                </p>
            </div>
        </div>


       @foreach($address as $row)
        <div class="span4">
            <div class="widget">
                <h5 class="widgetheading">{{$row->title}}</h5>
                <address>
                    <strong>{{$row->name}}</strong><br>
                    {{$row->address}}<br>

                </address>
                <p>
                    <i class="icon-phone"></i> ({{$row->phone1}}) - ({{$row->phone2}})<br>
                    <i class="icon-envelope-alt"></i> {{$row->email}}
                </p>
            </div>
        </div>
           @endforeach
    </div>
</div>
<div id="sub-footer">
    <div class="container">
        <div class="row">
            <div class="span6">
                <div class="copyright">
                    <p>
                        <span>&copy; Irony Soft - All right reserved.</span>
                    </p>
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                        -->
                        Designed by <a href="https://ironysoft.com/">Irony Soft</a>
                    </div>
                </div>
            </div>
            <div class="span6">
                <ul class="social-network">
                    <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                    <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>