<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'Includes/config_session_inc.php';
    require_once 'Includes/sign_up_view.php';
    require_once "Includes/login_view.php"
?>


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
                        <div class="container">
                            <div class="row">
                                <div class="col col-xs chat_vert">
                                    <p class="h5 fw-bold">
                                        Chat
                                    </p>
                                </div>
                                <div class="col col-xs">
                                    <?php 
                                        output_username(); 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="chat_proper">
                            <div class="chat_messages">
                            <!--
                                #TO DO - SQL Chat integration 
                            -->
                            </div>
                            <div class="user_message">
                                <hr />
                                <div class="form-col">
                                    <div class="size_of_row row">
                                        <div class="no_margin padding_format col-10">
                                            <input type="text" class="form-control" placeholder="Message">
                                        </div>
                                        <div class="no_margin padding_format col col-2 col-xs">
                                            <button class="btn btn-default">
                                                <img src="Assets/send_chat_icon.png" class="send_image" width="20" />
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="guest_list">
                        <p class="h5 fw-bold">
                            Guest list
                        </p>
                        <div class="list_proper">
                            <div class="container">
                                <div class = "row">
                                <div class="col-md-auto">
                                    <?php
                                        $sql_querry = $pdo->query("SELECT username FROM guests;");
                                        while ($row = $sql_querry->fetch()) {
                                            echo $row['username'] . "<br>";
                                        }
                                    ?>
                                </div>
                                <div class="col col-xs text-end">
                                    <?php
                                        $sql_querry = $pdo->query("SELECT created_at FROM guests;");
                                        while ($row = $sql_querry->fetch()) {
                                            echo $row['created_at'] . "<br>";
                                        }
                                    ?>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
