/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
    config.filebrowserBrowseUrl = '/ressources/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '/ressources/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '/ressources/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '/ressources/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '/ressources/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '/ressources/kcfinder/upload.php?opener=ckeditor&type=flash';


	/// / Define changes to default configuration here. For example:
	 config.language = 'fr';
    // config.uiColor = '#AADC6E';

    config.toolbar = [
        { name : 'basicstyles' , items : ['Bold','Italic','Strike','-','RemoveFormat']},
        { name : 'paragraph' , items : ['BulletedList','Outdent','Indent','-','Blockquote','Justifyleft','Justifycenter','Justifyright']},
        { name : 'styles' , items : ['Styles','Format','FontSize','TextColor']},
        { name : 'tools' , items : ['Maximize']},
        { name : 'insert' , items : ['Image','Iframe','-','Table','Accordionlist','Smiley']},
    ]
};































