<?php get_header();?>


<section>

    <h2>GALLERY</h2>

    <div class="list">
        <img src=" <?php  echo  get_theme_file_uri('images/sample1.jpg')?>">
        <h4>見出しを入れます。</h4>
        <p>説明を入れます。</p>
    </div>


    <?php  echo  get_theme_file_uri('')?>

    <div class=" list">
        <img src="  <?php  echo  get_theme_file_uri('images/sample2.jpg')?>">
        <h4>ここの見出しの色は、cssフォルダのstyle.cssの「.list h4」で設定されているcolorのコードで変更できます。</h4>
        <p>左の画像の幅もstyle.cssの「.list img」のwidthの数字で変更できます。</p>
    </div>

    <div class=" list">
        <img src=" <?php  echo  get_theme_file_uri('images/sample3.jpg')?>">
        <h4>見出しを入れます。</h4>
        <p>説明を入れます。</p>
    </div>

    <div class="list">
        <img src=" <?php  echo  get_theme_file_uri('images/sample4.jpg')?>">
        <h4>見出しを入れます。</h4>
        <p>説明を入れます。</p>
    </div>

    <div class="list">
        <img src=" <?php  echo  get_theme_file_uri('images/sample5.jpg')?>">
        <h4>見出しを入れます。</h4>
        <p>説明を入れます。</p>
    </div>

</section>

</div>
<!--/contents-->

<?php get_footer();?>