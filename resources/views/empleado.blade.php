<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ULTIMO Admin Dashboard Template</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>
<body>
<div class="wrapper">
    <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="page-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile_bg">
                        <div class="user-profile-sidebar">
                            <div class="row">
                                <div class="col-md-4"><img src="images/pro.png" /></div>
                                <div class="col-md-8">
                                    <div class="user-identity">
                                        <h4><strong>John Doe</strong></h4>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="user-button">
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="button" class=" btn btn-primary btn-rounded"><i class="fa fa-envelope"></i> Send Message</button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-default btn-rounded"><i class="fa fa-user"></i> Add as friend</button>
                                </div>
                            </div>
                        </div>

                        <h6><strong >CONNECTION</strong></h6>
                        <div class="">
                            <ul class="social_icons ">
                                <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/block-web-->
                    <section class="panel panel-default ">
                        <form >
                            <textarea placeholder="What are you doing..." rows="3" class="form-control no-border profile_form" style="width:414px;"></textarea>
                        </form>
                        <footer class="profile_form">
                            <button class="btn btn-info pull-right btn-sm">POST</button>
                            <ul class="nav nav-pills nav-sm">
                                <li><a href="#"><i class="fa fa-camera text-muted"></i></a></li>
                                <li><a href="#"><i class="fa fa-video-camera text-muted"></i></a></li>
                            </ul>
                        </footer>
                    </section>

                </div>
                <!--/col-md-4-->
                <div class="col-md-8">
                    <div class="block-web full">
                        <ul class="nav nav-tabs nav-justified nav_bg">
                            <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> HOY</a></li>
                            <li class=""><a href="#edit-profile" data-toggle="tab"><i class="fa fa-pencil"></i>EVENTUALIDADES</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane animated fadeInRight active" id="about">
                                <div class="user-profile-content">
                                    <h5><strong>ABOUT</strong> ME</h5>
                                    <p>
                                        @foreach($tareas as $tarea)
                                            {{$tarea}}
                                        @endforeach

                                    </p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5><strong>CONTACT</strong> ME</h5>
                                            <address>
                                                <strong>Phone</strong><br>
                                                <abbr title="Phone">+91 354 123 4567</abbr>
                                            </address>
                                            <address>
                                                <strong>Email</strong><br>
                                                <a href="mailto:#">first.last@example.com</a>
                                            </address>
                                            <address>
                                                <strong>Website</strong><br>
                                                <a href="http://riaxe.com">http://riaxe.com</a>
                                            </address>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5><strong>MY</strong> SKILLS</h5>
                                            <p>UI Design</p>
                                            <p>Clean and Modern Web Design</p>
                                            <p>PHP and MySQL Programming</p>
                                            <p>Vector Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>














<div class="demo"><span id="demo-setting"><i class="fa fa-cog txt-color-blueDark"></i></span> <form><legend class="no-padding margin-bottom-10" style="color:#6e778c;">Layout Options</legend><section><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-header" name="subscription"><span>Fixed Header</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-navigation" name="terms"><span>Fixed Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-rigth-navigation" name="terms"><span>Right Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-boxed-layout" name="terms"><span>Boxed Layout</span></label><span id="smart-bgimages" style="display: none;"></span></section><section><h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a id="reset-smart-widget" class="btn btn-xs btn-block btn-primary" href="javascript:void(0);"><i class="fa fa-refresh"></i> Factory Reset</a></section> <h6 class="margin-top-10 semi-bold margin-bottom-5">Ultimo Skins</h6><section id="smart-styles"><a style="background-color:#23262F;" class="btn btn-block btn-xs txt-color-white margin-right-5" id="dark_theme" href="javascript:void(0);"><i id="skin-checked" class="fa fa-check fa-fw"></i> Dark Theme</a><a style="background:#E35154;" class="btn btn-block btn-xs txt-color-white" id="red_thm" href="javascript:void(0);">Red Theme</a><a style="background:#34B077;" class="btn btn-xs btn-block txt-color-darken margin-top-5" id="green_thm" href="javascript:void(0);">Green Theme</a><a style="background:#56A5DB" class="btn btn-xs btn-block txt-color-white margin-top-5" data-skinlogo="img/logo-pale.png" id="blue_thm" href="javascript:void(0);">Blue Theme</a><a style="background:#9C6BAD" class="btn btn-xs btn-block txt-color-white margin-top-5" id="magento_thm" href="javascript:void(0);">Magento Theme</a><a style="background:#FFFFFF" class="btn btn-xs btn-block txt-color-black margin-top-5" id="light_theme" href="javascript:void(0);">Light Theme</a></section></form> </div>









<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jPushMenu.js"></script>
<script src="js/side-chats.js"></script>
</body>
</html>
