/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    config.toolbarGroups = [
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
        {name: 'forms', groups: ['forms']},
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
        {name: 'links', groups: ['links']},
        {name: 'insert', groups: ['insert']},
        {name: 'styles', groups: ['styles']},
        {name: 'colors', groups: ['colors']},
        {name: 'tools', groups: ['tools']},
        {name: 'others', groups: ['others']},
        {name: 'about', groups: ['about']}
    ];
    config.font_style =
        {
            element: 'span',
            styles: {'font-family': 'Segoe UI", "Helvetica Neue", Helvetica, Arial, sans-serif'},
            overrides: [{element: 'font', attributes: {'face': null}}]
        };
    CKEDITOR.config.autoParagraph = false;
    config.removeButtons = 'Print,Templates,Save,NewPage,Preview,Source,Styles,Format,Font,Maximize,ShowBlocks,About,Flash,Table,HorizontalRule,Smiley,PageBreak,Iframe,Anchor,CreateDiv,CopyFormatting,RemoveFormat,Form,Checkbox,TextField,Textarea,Select,Button,HiddenField,ImageButton,Scayt,SelectAll,Find,Replace,Cut,Copy,Paste,PasteText,PasteFromWord,Radio,Blockquote,SpecialChar,TextColor,BGColor';
};
