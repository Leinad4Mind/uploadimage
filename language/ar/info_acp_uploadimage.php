<?php
/**
*
* @package Upload Image
* @copyright (c) 2014 John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Basil Taha Alhitary - www.alhitary.net
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_UPLOAD_IMAGE_TITLE'			=> 'رفع الصور',
	'ACP_IMAGE_TITLE'					=> 'رفع الصور',
	'ACP_UPLOAD_IMAGE_TITLE_EXPLAIN'	=> 'هذه الإضافة تعطيك امكانية رفع الصور إلى مجلد الصور في منتداك. سيتم انشاء مجلد بإسم ui تلقائياً عند تفعيل هذه الإضافة وسيحتوي على جميع الصور التي تريد رفعها. <br />تستطيع عرض الصور في المنتدى بواسطة نسخ رابط الصورة بسهولة عند النقر على %1$s الرابط. <br />يجب عليك أخذ الحيطة عند حذف الصور لأنه لا يُمكن التأكد من استمرارية استخدام الصورة أو لا.',

	'IMAGE_LIST'						=> 'قائمة الصور',
	'IMAGE_PATH'						=> 'رابط الصورة',
	'IMAGE_NAME'						=> 'اسم الصورة',
	'FORMAT'							=> 'الأبعاد',
	'SIZE'								=> 'الحجم',
	'FOLDER_SIZE'						=> 'Foldersize',
	'IMG_FOLDER'						=> 'Change image folder where images are uploaded',
	'ACP_IMAGE_COPY_PATH'				=> 'Copy image path',
	'IMAGE_DELETE'						=> 'حذف',
	'ACP_IMAGE_DELETE_CONFIRM' 			=> 'هل أنت متأكد من حذف الصورة ?',

	'ACP_IMAGE_DELETE_SUCCESS'			=> 'تم حذف الصورة',
	'ACP_IMAGE_DELETED_LOG'				=> '<strong>تم حذف الصورة</strong><br />» %1s',

	'UPLOADIMAGE_NOTICE'				=> '<div class="phpinfo"><p class="entry">This extension resides in %1$s » %2$s » %3$s.<br />Upload images of a size you want to use!</p></div>',
	'FH_HELPER_NOTICE'					=> 'Forumhulp helper application does not exist!<br />Download <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> and copy the helper folder to your forumhulp extension folder.',
));

// Description of extension
$lang = array_merge($lang, array(
	'DESCRIPTION_PAGE'		=> 'Description',
	'DESCRIPTION_NOTICE'	=> 'Extension note',
	'ext_details' => array(
		'details' => array(
			'DESCRIPTION_1'		=> 'Preview of images',
			'DESCRIPTION_2'		=> 'Upload up to 10 images ',
			'DESCRIPTION_3'		=> 'Image information',
			'DESCRIPTION_4'		=> 'Easy path copying',
		),
		'note' => array(
			'NOTICE_1'			=> 'Free formatsize',
			'NOTICE_2'			=> '3.2 ready.',
		)
	)
));
