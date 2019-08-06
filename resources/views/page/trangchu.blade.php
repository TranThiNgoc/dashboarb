@extends('master')
@section('content')
<div class="content">
        <div class="responsive" style="text-align: center;">
            <h2> Porto is
            <span> extremely</span>
                beasutiful and fully responsive.
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.

            </p>

        </div>
        <div class="circle" >

            <img src="source/stra.jpg" height="220" width="220"  style="margin-top: 10px;"/>
            <img src="source/play.jpg" height="150" width="150"/>
            <img src="source/buil.jpg" height="220" width="220"  style="margin-top: 10px;"/>
            <img src="source/ou.jpg" height="300" width="300"/></div>
        <div class="center"  style="height: 700px;">

               <span style="font-size: 15pt;"> Our <strong>Features</strong> </span>
            <div class="ngoc" style="width: 100%; float: left;">

                <div class="Support" style="width: 60%; position: relative;display: table-cell;">
                    <div>
                        <table class="table table-borderless">
                            <thead>
                            <tr>

                                <th scope="col">Customer Support</th>
                                <th scope="col">Slide</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</td>

                            </tr>




                            </tbody>
                        </table>

                    </div>
                    <div>
                        <table class="table table-borderless">
                            <thead>
                            <tr>

                                <th scope="col">HTML5/CSS3/JS</th>
                                <th scope="col">Icons</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</td>

                            </tr>




                            </tbody>
                        </table>

                    </div>
                    <div>
                        <table class="table table-borderless">
                            <thead>
                            <tr>

                                <th scope="col">500+ Google Fonts</th>
                                <th scope="col">Button</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</td>

                            </tr>




                            </tbody>
                        </table>

                    </div>
                    <div>
                        <table class="table table-borderless">
                            <thead>
                            <tr>

                                <th scope="col">color</th>
                                <th scope="col">Lightbox</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa</td>

                            </tr>




                            </tbody>
                        </table>

                    </div>

                </div>
                <div class="right-item" style="width: 40%;  display: table-cell;position: relative; border-left: 1px solid lavender;">
                    <div class="creative" style="background-color: lavender; height: 40px;">
                        <strong> Creative Websites</strong>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blanorem ipsum dolor sit amet, consecte.
                        </p><br/>
                        <p>Adipiscing elit phasellus blanit ma…</p><br/>
                        <a href="layout.html" style="text-decoration: none;"> read more</a>

                    </div>
                    <div class="Contants" style="background-color: lavender; margin-bottom: 2px;">
                            <strong>Contanct Froms</strong>
                    </div>
                    <div class="Porfo" style="background-color: lavender; ">
                            <strong>Portfolio Pages</strong>
                    </div>



                </div>


            </div>
            <div>

            </div>

        </div>
        <div>

        </div>
        <div>

        </div>

    </div>
    <div class="finally-content" style=" height: 400px; background-color: darkslategray; float: left;" >
        <div class="news" style="width: 30%; position: relative; display: table-cell; padding-right: 5px; ">
            <h4> NEWSLETTER</h4>
            <P>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</P>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Email Adress" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">Go!</span>
                </div>
            </div>


        </div>

        <div class="Lastest" style="width: 25%;position: relative;display: table-cell;padding-right: 5px;  ">
            <h4> LATEST TWEETS</h4>
            <div>
                <p>Annual big sale is now live! Please check our mega march campaign for Porto wordpress theme! https://t.co/hantQ1Ipde</p>
                <br/> 09:38 AM Mar 25th

            </div>
            <div>
                <p>Annual big sale is now live! Please check our mega march campaign for Porto wordpress theme! https://t.co/hantQ1Ipde</p>
                <br/> 09:38 AM Mar 25th

            </div>


        </div>

        <div class="Phone" style="width: 25%; display: table-cell; position: relative; padding-right: 5px; ">
            <h4> CONTACT US</h4>
            <p>Address: 1234 Street Name, City Name, United States <br/>Phone: (123) 456-7890<br/> Email: mail@example.com<br/> Working Days/Hours: Mon - Sun / 9:00 AM - 8:00 PM </p>

        </div>

        <div class="follow " style=" width: 20%; display: table-cell;position: relative;">
            <h4> FOLLOW US</h4>

        </div>


    </div>
    @endsection