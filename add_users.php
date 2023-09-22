<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3CMS Add Users</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./icons-1.11.0/icons-1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./asset/style_add.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Nav left-->
            <div class="nav__left col-md-2 bg-white ">
                <div class="logo d-flex p-4 gap-1">
                    <img src="./asset/img/logo1.png" alt="" style = "width: 60px; height: 40px">
                    <img src="./asset/img/logo2.png" alt="" style = "width: 118px; height: 40px">
                </div>
                <ul class="nav flex-column d-flex justify-content-between">
                    <li class="nav__item">
                        <a class="nav__link" href="#">
                            <i class="nav__item-icon bi bi-person"></i>
                            User
                            <span class="nav__item-warrap ms-3 p-1">Modules</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">
                            <i class="nav__item-icon bi bi-box-seam"></i>
                            CMS
                            <span class="nav__item-warrap ms-3 p-1">Modules</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">
                            <i class="nav__item-icon bi bi-gear"></i>
                            Config
                            <span class="nav__item-warrap ms-3 p-1">Modules</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-grid"></i>Dashboard</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-book"></i>Courses</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-people"></i>Instructor</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-info-circle"></i>Apps</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-pie-chart"></i>Charts</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-star"></i>Bootstrap</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-heart"></i>Plugins</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-gear-wide"></i>Widget</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-file-earmark-check"></i>Forms</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-file-earmark-spreadsheet"></i>Table</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#"><i class="nav__item-icon bi bi-file-earmark-break"></i>Pages</a>
                    </li>
                    </ul>

                    <div class="nav__footer">
                        <span>Made with</span>
                        <i class="bi bi-heart-fill"></i>
                        <span>by DexignZone</span>
                    </div>
            </div>


            <!-- Main -->
            <div class="col-md-9" style="background-color: #eee;">
                    <div class="main ms-4 me-4">
                        <!-- header -->
                        <div class="main__header">
                            <div class="row">
                                <div class="header d-flex h-100 mt-4">
                                    <div class="col-md-6">
                                        <div class="header__left d-flex gap-4">
                                            <a href="#"><i class="header__left-icon bi bi-list text-decoration-none"></i></a>
                                            <span class="header__left-title">Add Users</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="header__right d-flex gap-2 justify-content-end align-items-center">
                                            <div class="header__group px-3 py-2">
                                                <a href=""><i class="header__right-icon fa-solid fa-magnifying-glass"></i></a>
                                                <input class="bord__out header__input p-1" type="text" placeholder="Search here...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main__body bg-white px-4">
                            <div class="main__user-header mb-2 bg-white">
                                <span class="main__user-title">New User Form</span>
                                <hr>
                            </div>
                            <div class="row">
                               <div class="main__user d-flex">
                                   <div class="col-md-6">
                                            <div class="h-100 d-flex flex-column justify-content-center align-items-center">
                                                <div>
                                                    <img class="main__avt" src="./asset/img/avatar.jpg" alt="">
                                                </div>
                                                <div class="align-self-start mt-5">
                                                    <input type="checkbox"> 
                                                    <label class="label__ac" for="">is active</label>
                                                </div>
                                            </div>
                                   </div>
                                   <div class="col-md-6">
                                        <form action="" class="main__form">
                                            <div class="d-flex gap-4">
                                                <div class="form__group">
                                                    <label for="" class="form__label">First Name</label>
                                                    <input class="form__input form__firstlast" type="text" placeholder="First Name" id="firstname" name="firstname">
                                                </div>
                                                <div class="form__group">
                                                    <label for="" class="form__label">Last Name</label>
                                                    <input class="form__input form__firstlast" type="text" placeholder="Last Name" id="lastname" name="lastname">
                                                </div>
                                            </div>
                                            <div class="form__group">
                                                <label for="" class="form__label">UserName<span class="form__span">*</span></label> 
                                                <input class="form__input" type="text" placeholder="Username" id="username" name="username">
                                            </div>
                                            <div class="form__group">
                                                <label for="" class="form__label">Email<span class="form__span">*</span></label> 
                                                <input class="form__input" type="email" placeholder="Email" id="email" name="email">
                                            </div>
                                            <div class="form__group">
                                                <label for="" class="form__label">Phone Number<span class="form__span">*</span></label> 
                                                <input class="form__input" type="text" placeholder="Phone Number" id="phonenumber" name="phonenumber">
                                            </div>
                                   </div>
                               </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-4">
                                        <div class="form__group">
                                            <label for="" class="form__label">Role</label>
                                            <select class="form__input" name="role" id="role">
                                                <option value="">Admin</option>
                                                <option value="">Manager</option>
                                                <option value="">Customer</option>
                                                <option value="">q</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form__group">
                                            <label for="" class="form__label">Gender<span class="form__span">*</span></label>
                                            <select class="form__input" name="role" id="role">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                                <option value="">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form__group">
                                            <label for="" class="form__label">Date of Birth<span class="form__span">*</span></label>
                                            <input class="form__input" type="date" name="date" id="date">
                                        </div>
                                    </div>
                                        <div class="col-md-4">
                                            <div class="form__group">
                                                <label for="" class="form__label">Facebook Url</label>
                                                <input class="form__input" type="text" id="fb" name="fb">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form__group">
                                                <label for="" class="form__label">Twitter Url</label>
                                                <input class="form__input" type="text" id="tw" name="tw">
                                            </div>
                                        </div>
                                        <div class="col-md-4"><div class="form__group">
                                            <label for="" class="form__label">Linkedin Url</label>
                                            <input class="form__input" type="text" name="link" id="link">
                                        </div></div>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="" class="form__label">About</label>
                                <textarea class="form__textarea" name="about" id="about" cols="30" rows="5" placeholder="Write About YourSelf..."></textarea>
                            </div>
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form__group ">
                                            <label for="" class="form__label">Password<span class="form__span">*</span></label> 
                                            <input class="form__input" type="password" placeholder="Password" id="password" name="password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form__group ">
                                            <label for="" class="form__label">Confirm Password<span class="form__span">*</span></label> 
                                            <input class="form__input" type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword">
                                        </div>
                                    </div>
                            </div>
                            <div>
                                <button class="btn btn__secondary mt-4 mb-5" type="submit">Save</button>
                                <button class="btn btn__primary mt-4 mb-5" type="">Cancel</button>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>

            <!-- Nav right -->
            <div class="col-md-1">
                <div class="nav__right mt-4 vh-100 d-flex flex-column justify-content-between align-items-center">
                    <div class="nav__right-header">
                        <a class="" href="#"><img class="nav__img" src="./asset/img/anh-chill-hinh-chill-lofi-buon-dep-4.jpg" alt=""></a>
                    </div>
                    <div class="nav__right-mid d-flex flex-column">
                        <button class="btn__tool"><i class="btn__tool-icon bi bi-gear-fill"></i></button>
                        <button class="btn__tool"><i class="btn__tool-icon bi bi-envelope-fill"></i></button>
                        <button class="btn__tool"><i class="btn__tool-icon bi bi-bell-fill"></i></button>
                    </div>
                    <div class="nav__right-footer d-flex flex-column gap-2">
                        <img src="./asset/img/en.png" alt="">
                        <span>en<i class="fa-solid fa-chevron-down"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>