<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="krzys_site.css">
    <title> Krzys-App </title>
</head>

<body>
    <div class="background">
        <nav class="navbar">
        <div class="banner">
                <div class="guest_chat">
                    <button class="btn btn-outline-secondary btn-lg" data-bs-toggle="offcanvas" href="#guest_panel" role="button" aria-controls="guest_panel">≡</button>
                </div>
                <div class="logo">
                    <a href="#main_page">
                        Krzys-App Website
                        <img src="Assets/logo_png.png" class = "logo_png">
                    </a>
                </div>
            </div>
        </nav>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="guest_panel" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas_background">
                <div class="offcanvas_header">
                    <div class="d-flex bd-highlight">
                        <div class="p-2 w-100 bd-highlight">
                            <h4 class="guest_title" id="guest_panel_title"><b>Guest panel</b></h4>
                        </div>
                        <div class="p-2 flex-shrink-1 bd-highlight">
                            <div class="close">
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offcanvas_content">
                    <div class="quick_chat">
                        <p class="h5">
                            Chat
                        </p>
                        <div class="chat_proper">
                            <!--
                                #TO DO - SQL Chat integration 
                            -->
                        </div>
                    </div>
                    <div class="guest_list">
                        <p class="h5">
                            Guest list:
                        </p>
                        <div class="list_proper">
                            <!--
                                #TO DO - SQL Chat integration 
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="main_page">
            <div class="content">
                <div class="container my-5">
                    <div class="my_photo">
                        <img src="Assets/logo_png.png" class = "my_photo_png">
                        <div class="my_photo_text">
                            Krzystof Nowakowski
                        </div>
                    </div>
                    <div class="about_me">
                        <div class="about_me_title">
                            <h3>
                                About me...
                            </h3>
                        </div>
                        <div class="list">
                            <ul class="list-unstyled">
                                <li> <div class="p-4 px-4 m-3 me-5 ms-5 rounded-5 border border-5 bg-dark"> <div class="style_list"> <a href="#skills"> Skills </a> </div></div></li>
                                <li> <div class="p-4 px-4 m-3 me-5 ms-5 rounded-5 border border-5 bg-dark"> <div class="style_list"> <a href="krzys_site_experience.php"> Experience </a> </div> </div></li>
                                <li> <div class="p-3 px-4 m-3 me-5 ms-5 rounded-5 border border-5 bg-dark"> <div class="style_list"> CV &nbsp;&nbsp; <a href="cv.pdf" download="CV_Krzysztof_Nowakowski.pdf"> <button class="btn btn-outline-secondary btn-lg"><img src="Assets/download_symbol.png" class = "download_symbol"> </button> </a> </div> </div></li>
                                <li> 
                                    <div class="p-2 px-3 m-2 me-5 ms-5 rounded-5 border border-5 bg-dark">
                                        <div class="accordion" id="interests_acc">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-1">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Interests" aria-expanded="false" aria-controls="Interests">
                                                        Interests
                                                    </button>
                                                </h2>
                                                <div id="Interests" class="accordion-collapse collapse" aria-labelledby="Interests" data-bs-parent="interests_acc">
                                                    <div class="int_text">
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta laboriosam facilis eligendi quod minima illo facere, nulla ipsam a sit ut ratione blanditiis. Ex dolores cumque, accusamus libero sunt hic.</p>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi odio ex, consequuntur cum, ullam nihil deleniti sint sunt, alias delectus est aperiam qui dicta dolorem nobis officia libero ut eos obcaecati fugiat ipsam nam! Quis, porro maxime facilis deserunt nemo eligendi sapiente quam architecto, ullam, perferendis dicta doloribus voluptate atque! </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <section id="skills">
                        <div class="skills_title"><h4> Skills </h4></div>
                        <div class="Skills">
                           <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis ratione sit, omnis, cupiditate iure enim necessitatibus maiores obcaecati nostrum numquam exercitationem porro! Cum, pariatur natus. Excepturi pariatur quos beatae laborum? Eveniet iste maiores culpa earum illo sapiente debitis dignissimos neque, perferendis eius omnis error voluptas excepturi quaerat. Atque nisi, odit quas perferendis, et dolorem eligendi nulla ea facilis quidem neque similique? Quia, expedita unde sint placeat alias nisi nemo repellat repellendus, fuga adipisci voluptas ratione in tenetur. Distinctio consectetur assumenda ab, culpa sapiente dolore itaque magnam aut quos, tempora enim odit. A veniam velit sunt soluta explicabo quos placeat praesentium natus, eaque est quod non odit dolore quasi ab error unde. Quis nam ducimus quae eveniet eum atque adipisci animi.
                            </p>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic ipsa possimus, quasi necessitatibus dignissimos maiores fuga sit saepe mollitia nam dicta voluptatibus provident non. Rerum hic ullam ex porro unde sequi, blanditiis odio possimus nostrum, accusamus vero voluptatibus, excepturi quos similique. Non, sapiente earum dolorum veritatis porro possimus alias, commodi vel laboriosam natus quod exercitationem minus illum distinctio, velit odio aliquam? Ducimus quibusdam temporibus veritatis, vel aliquid iure rem delectus totam officiis enim error consectetur omnis blanditiis molestiae praesentium corporis sed voluptatem saepe at ea quas beatae nesciunt. A quidem laborum quam assumenda consequuntur adipisci soluta facere inventore quisquam molestiae impedit fugit labore iusto, sapiente fuga deleniti amet voluptatibus, sint doloremque similique officiis rem. Nam temporibus quasi enim assumenda ipsum error, similique sed dignissimos, sint, iure eaque beatae! Ipsam quaerat consequatur aut, accusamus quos asperiores ab nobis sunt eligendi illo sapiente, eos animi in modi atque iusto rem quasi earum!
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>