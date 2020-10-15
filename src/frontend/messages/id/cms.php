<?php

return [
    'tb_composition' => 'Bahasa',
    'tb_properties' => 'Properti',
    'tb_seo' => 'Optimalisasi Mesin Pencarian(SEO)',
    'tb_seo_title' => 'Judul',
    'tb_seo_description' => 'Deskripsi',
    'tb_seo_description_notfound' => 'Tidak ada deskripsi ditambahkan di halaman ini.',
    'tb_seo_link' => 'Tautan URL',
    'tb_seo_keywords' => 'Kata kunci',
    'tb_seo_keywords_notfound' => 'Tidak ada kata kunci yang ditemukan. Anda harus menambahkan kata kunci untuk menganalisis konten Anda.',
    'tb_seo_warning' => 'beberapa kata kunci Anda tidak ditemukan di konten Anda, Anda harus memperbaikinya dengan mengubah kata kunci Anda atau menambahkan kata kunci yang hilang ke konten.',
    'tb_edit_alt' => 'Ubah halaman ini pada CMS administrasi',
    'tb_visible_not_alt' => 'Halaman ini tidak terlihat oleh pengunjung',
    'tb_visible_alt' => 'Halaman ini terlihat hanya untuk pengunjung',
    'block_html_html_label' => 'Kode HTML',
    'block_html_no_content' => 'Tidak ada kode HTML yang ditambahkan',
    'block_module_name' => 'Module',
    'block_module_modulename_label' => 'Nama modul',
    'block_module_modulecontroller_label' => 'Nama kontroller (tanpa akhiran kontroller)',
    'block_module_moduleaction_label' => 'Nama aksi (tanpa imbuhan aksi)',
    'block_module_moduleactionargs_label' => 'Argumen aksi (json: {"var": "value"})',
    'block_module_no_module' => 'Tidak ada modul yang dispesifikasi',
    'block_module_integration' => 'Modul integrasi',
    'block_html_name' => 'HTML',
    'block_module_modulename_help' => 'Hanya modul frontend yang didaftarkan pada file konfigurasi yang ditampilkan',
    'block_group_dev_elements' => 'Pengembangan',
    'block_group_layout_elements' => 'Tata letak',
    'block_group_basic_elements' => 'Dasar',
    'block_group_project_elements' => 'Projek',
    'block_group_text_elements' => 'Teks',
    'block_group_media_group' => 'Media',
    
    // 1.0.0
    'block_module_strictrender' => 'Strict Render',
    'block_module_strictrender_help' => 'Ketika strict render diaktifkan, modul hanya akan menjalankan rute yang disediakan (modul, kontroller, aksi, parameter) tanpa mendengarkan aksi dan rute kontroller',
    'block_html_cfg_raw_label' => 'Render HTML di Admin',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
    'block_mirror_language_name' => 'Mirror Language',
    'block_mirror_config_language_label' => 'Source Language',
    'block_mirror_admin_empty_language' => 'Configure a <b><span class="material-icons">edit</span> source language</b> to mirror its content for the current placeholder.',
    'block_mirror_admin_configured_language' => 'Mirroring this placeholder from <span class="material-icons">arrow_right_alt</span> <b>{name}</b>.',
];
