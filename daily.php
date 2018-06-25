<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My blog</title>
<link rel="stylesheet" href="css/layout.css" />
<link rel="stylesheet" href="css/daily.css" />

<?php
include('head.php');
?>

<div id="container" class="clear">
    <div id="editor">
    	<div id="edit_title">
        	<b>标题</b><br />
            <input id="editTitle" type="text" name="editTitle" />
        </div>
        <div id="edit_body">
        	<b>内容</b><br />
            <textarea id="editBody" type="text" name="editBody" ></textarea>
        </div>
        <div id="edit_tag">
        	<span>标签:</span>
            <select id="editTag">
            	<option value="生活">生活</option>
                <option value="情感">情感</option>
                <option value="技术">技术</option>
                <option value="动漫">动漫</option>
                
            </select>
        </div>
        <div id="edit_button">
        	<input id="edit_post" class="button" type="submit" name="edit_post" value="发布" />
            <input id="edit_draft" class="button" type="submit" name="edit_draft" value="存为草稿" />
            <input id="edit_cancel" class="button" type="submit" name="edit_cancel" value="取消" />
        </div>
        <div class="blank"></div>
    </div>
</div>

</body>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.transit.min.js"></script>
<script type="text/javascript" src="js/jquery.textanimation.js"></script>
<script src="js/main.js" type="text/javascript" ></script>

</html>
