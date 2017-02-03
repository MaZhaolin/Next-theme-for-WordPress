<?php add_action('admin_menu', 'next_page');
function next_page (){
    if ( count($_POST) > 0 && isset($_POST['next_settings']) ){
        $options = array ('author','avator','site_time','duoshuo_shortname','scheme');
        foreach ( $options as $opt ){
            delete_option ( 'next_'.$opt, $_POST[$opt] );
            add_option ( 'next_'.$opt, $_POST[$opt] );
        }
    }
    add_theme_page(__('主题选项'), __('主题选项'), 'edit_themes', basename(__FILE__), 'next_settings');
}
function next_settings(){?>
<style>
.form-group{
}
.form-group label{
  display: block;
  padding:10px;
}
.form-group input[type=text]{
  width: 80%;
  padding: 5px;
  outline: none;
}
input[type=submit]{
  background:#fff;
  border:1px solid #555;
  padding: 5px 20px;
  outline: none;
  -webkit-transition: all .3s;
  -o-transition: all .3s;
  transition: all .3s;
}
input[type=submit]:hover{
  background: #555;
  color: #fff
}
</style>
<div>
<h2>Next 主题设置</h2>
<form method="post" action="">
    <fieldset>
    <div class="form-group">
      <label for="">站点作者名称:</label>
      <input  name="author" id="author" type="text" name="" value="<?php echo get_option('next_author'); ?>">
    </div>
     <div class="form-group">
      <label for="">头像路径:</label>
      <input name="avator" id="avator" type="text" name="" value="<?php echo get_option('next_avator'); ?>">
    </div>
    <div class="form-group">
      <label for="">你的多说short_name:</label>
      <input name="duoshuo_shortname" id="duoshuo_shortname" type="text" name="" value="<?php echo get_option('next_duoshuo_shortname'); ?>">
    </div>
    <div class="form-group">
      <label for="">底部时间设置:</label>
      <input name="site_time" id="site_time" type="text" name="" value="<?php echo get_option('next_site_time'); ?>">
    </div>
    <div class="form-group">
      <label for="">主题方案:</label>
      <select name="scheme" id="">
        <option value="Muse" <?php if(get_option('next_scheme') == 'Muse'){ ?> selected="selected"<?php 
        } ?>>Muse</option>
        <option value="Mist" <?php if(get_option('next_scheme') == 'Mist'){ ?> selected="selected" <?php 
        } ?>>Mist</option>
        <option value="Pisces" <?php if(get_option('next_scheme') == 'Pisces'){ ?> selected="selected" <?php 
        } ?>>Pisces</option>
      </select>
    </div>
    </fieldset>
    <p>
        <input type="submit" name="Submit" value="保存设置" />
        <input type="hidden" name="next_settings" value="save" style="display:none;" />

    </p>
</form>
</div>
<?php }
