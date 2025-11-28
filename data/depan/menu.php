<?php
    $Menu = [
        [
            "title" => "Beranda",
            "link"  => "/",
            "submenu" => []
        ],
        [
            "title" => "Profil",
            "link"  => "#",
            "submenu" => [
                ["title" => "Tentang Kami",        "link" => "/profil/tentang"],
                ["title" => "Sejarah",  "link" => "/profil/sejarah"],
                ["title" => "Tim Kami",            "link" => "/profil/tim"],
                ["title" => "Mitra & Partner",     "link" => "/profil/mitra"],
                ["title" => "Kebijakan & Legalitas","link" => "/profil/legal"]
            ]
        ],
        [
            "title" => "Produk & Solusi",
            "link"  => "#",
            "submenu" => [
                ["title" => "Layanan Internet",        "link" => "/produk/internet"],
                ["title" => "Produk & Solusi TI",      "link" => "/produk/it"],
                ["title" => "Infrastruktur & Jaringan","link" => "/produk/jaringan"],
                ["title" => "Layanan Fintech",         "link" => "/produk/fintech"]
            ]
        ],
        [
            "title" => "Layanan Profesional",
            "link"  => "#",
            "submenu" => [
                ["title" => "Analisis Data & Konsultasi", "link" => "/layanan/data"],
                ["title" => "Paket & Harga",              "link" => "/layanan/pricing"],
                ["title" => "Karier",                     "link" => "/layanan/karier"]
            ]
        ],
        [
            "title" => "Informasi Publik",
            "link"  => "#",
            "submenu" => [
                ["title" => "Berita & Artikel",     "link" => "/informasi/news"],
                ["title" => "Testimoni Pelanggan",  "link" => "/informasi/testimoni"],
                ["title" => "Portofolio Proyek",    "link" => "/informasi/projects"],
                ["title" => "Dokumentasi Kegiatan", "link" => "/informasi/gallery"]
            ]
        ],
        [
            "title" => "Bantuan",
            "link"  => "#",
            "submenu" => [
                ["title" => "Hubungi Kami", "link" => "/bantuan/contact"],
                ["title" => "FAQ",          "link" => "/bantuan/faq"]
            ]
        ],
    ];

?>