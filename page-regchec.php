<?php 
/**
 * Template Name: Шаблон страницы Активация учетной записи
 * Template Post Type: page
 */

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

get_header(); ?>
	<main class="main">	
	<div class="bread-crumbs-box">
			<div class="inner">	
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<div class="bread-crumbs">','</div>' );
						}
					?> 
			</div>
		</div>

        <section class = "content">
            <div class="inner">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title();?></h1>
                    <?php the_content();?>
                <?php endwhile;?>
                <?php endif; ?>

                <?
                    global $wpdb;
                    $user_feeld =  $wpdb->get_results("SELECT * FROM `shop_users` WHERE `id` = '".$_REQUEST["id"]."'");
                    
                    if (empty($user_feeld) || ($user_feeld[0]->autorizeKey != $_REQUEST["k"])) {
                ?>
                    <div class = "messageFormBlk">
						Ошибка активации. Пользователь не найден.
					</div>
                <?
                    } else {

                    $updateRez = $wpdb->update("shop_users",
                                   array(
                                       "autorize" => 1,
                                       "autorizeKey" => 0,
                                   ), 
                                   array(
                                       "id" => $_REQUEST["id"],
                                       
                                   )
                                );   
                    if (!empty($updateRez)) {
                ?>
                    <div class = "messageFormBlk messageFormBlkOk">
						Ваша учетная запись успешно активирована! <br/><a href="<?echo get_the_permalink(93)?>">Перейти а личный кабинет</a>
					</div>
                <?
                        } else {
                            ?>
                                <div class = "messageFormBlk">
						            Ошибка активации. Данные не обновленны перезагрузите страницу.
					            </div>
                            <?
                        }
                    }
                ?>

            </div>
        </section>
		
	</main>
<?php get_footer(); ?>