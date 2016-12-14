<?php
if(!isset($lt_list_icons)){
    $lt_list_icons = array(
        'fa' => array(
            "fa-glass",
            "fa-music",
            "fa-search",
            "fa-envelope-o",
            "fa-heart",
            "fa-star",
            "fa-star-o",
            "fa-user",
            "fa-film",
            "fa-th-large",
            "fa-th",
            "fa-th-list",
            "fa-check",
            "fa-remove",
            "fa-close",
            "fa-times",
            "fa-search-plus",
            "fa-search-minus",
            "fa-power-off",
            "fa-signal",
            "fa-gear",
            "fa-cog",
            "fa-trash-o",
            "fa-home",
            "fa-file-o",
            "fa-clock-o",
            "fa-road",
            "fa-download",
            "fa-arrow-circle-o-down",
            "fa-arrow-circle-o-up",
            "fa-inbox",
            "fa-play-circle-o",
            "fa-rotate-right",
            "fa-repeat",
            "fa-refresh",
            "fa-list-alt",
            "fa-lock",
            "fa-flag",
            "fa-headphones",
            "fa-volume-off",
            "fa-volume-down",
            "fa-volume-up",
            "fa-qrcode",
            "fa-barcode",
            "fa-tag",
            "fa-tags",
            "fa-book",
            "fa-bookmark",
            "fa-print",
            "fa-camera",
            "fa-font",
            "fa-bold",
            "fa-italic",
            "fa-text-height",
            "fa-text-width",
            "fa-align-left",
            "fa-align-center",
            "fa-align-right",
            "fa-align-justify",
            "fa-list",
            "fa-dedent",
            "fa-outdent",
            "fa-indent",
            "fa-video-camera",
            "fa-photo",
            "fa-image",
            "fa-picture-o",
            "fa-pencil",
            "fa-map-marker",
            "fa-adjust",
            "fa-tint",
            "fa-edit",
            "fa-pencil-square-o",
            "fa-share-square-o",
            "fa-check-square-o",
            "fa-arrows",
            "fa-step-backward",
            "fa-fast-backward",
            "fa-backward",
            "fa-play",
            "fa-pause",
            "fa-stop",
            "fa-forward",
            "fa-fast-forward",
            "fa-step-forward",
            "fa-eject",
            "fa-chevron-left",
            "fa-chevron-right",
            "fa-plus-circle",
            "fa-minus-circle",
            "fa-times-circle",
            "fa-check-circle",
            "fa-question-circle",
            "fa-info-circle",
            "fa-crosshairs",
            "fa-times-circle-o",
            "fa-check-circle-o",
            "fa-ban",
            "fa-arrow-left",
            "fa-arrow-right",
            "fa-arrow-up",
            "fa-arrow-down",
            "fa-mail-forward",
            "fa-share",
            "fa-expand",
            "fa-compress",
            "fa-plus",
            "fa-minus",
            "fa-asterisk",
            "fa-exclamation-circle",
            "fa-gift",
            "fa-leaf",
            "fa-fire",
            "fa-eye",
            "fa-eye-slash",
            "fa-warning",
            "fa-exclamation-triangle",
            "fa-plane",
            "fa-calendar",
            "fa-random",
            "fa-comment",
            "fa-magnet",
            "fa-chevron-up",
            "fa-chevron-down",
            "fa-retweet",
            "fa-shopping-cart",
            "fa-folder",
            "fa-folder-open",
            "fa-arrows-v",
            "fa-arrows-h",
            "fa-bar-chart-o",
            "fa-bar-chart",
            "fa-twitter-square",
            "fa-facebook-square",
            "fa-camera-retro",
            "fa-key",
            "fa-gears",
            "fa-cogs",
            "fa-comments",
            "fa-thumbs-o-up",
            "fa-thumbs-o-down",
            "fa-star-half",
            "fa-heart-o",
            "fa-sign-out",
            "fa-linkedin-square",
            "fa-thumb-tack",
            "fa-external-link",
            "fa-sign-in",
            "fa-trophy",
            "fa-github-square",
            "fa-upload",
            "fa-lemon-o",
            "fa-phone",
            "fa-square-o",
            "fa-bookmark-o",
            "fa-phone-square",
            "fa-twitter",
            "fa-facebook",
            "fa-github",
            "fa-unlock",
            "fa-credit-card",
            "fa-rss",
            "fa-hdd-o",
            "fa-bullhorn",
            "fa-bell",
            "fa-certificate",
            "fa-hand-o-right",
            "fa-hand-o-left",
            "fa-hand-o-up",
            "fa-hand-o-down",
            "fa-arrow-circle-left",
            "fa-arrow-circle-right",
            "fa-arrow-circle-up",
            "fa-arrow-circle-down",
            "fa-globe",
            "fa-wrench",
            "fa-tasks",
            "fa-filter",
            "fa-briefcase",
            "fa-arrows-alt",
            "fa-group",
            "fa-users",
            "fa-chain",
            "fa-link",
            "fa-cloud",
            "fa-flask",
            "fa-cut",
            "fa-scissors",
            "fa-copy",
            "fa-files-o",
            "fa-paperclip",
            "fa-save",
            "fa-floppy-o",
            "fa-square",
            "fa-navicon",
            "fa-reorder",
            "fa-bars",
            "fa-list-ul",
            "fa-list-ol",
            "fa-strikethrough",
            "fa-underline",
            "fa-table",
            "fa-magic",
            "fa-truck",
            "fa-pinterest",
            "fa-pinterest-square",
            "fa-google-plus-square",
            "fa-google-plus",
            "fa-money",
            "fa-caret-down",
            "fa-caret-up",
            "fa-caret-left",
            "fa-caret-right",
            "fa-columns",
            "fa-unsorted",
            "fa-sort",
            "fa-sort-down",
            "fa-sort-desc",
            "fa-sort-up",
            "fa-sort-asc",
            "fa-envelope",
            "fa-linkedin",
            "fa-rotate-left",
            "fa-undo",
            "fa-legal",
            "fa-gavel",
            "fa-dashboard",
            "fa-tachometer",
            "fa-comment-o",
            "fa-comments-o",
            "fa-flash",
            "fa-bolt",
            "fa-sitemap",
            "fa-umbrella",
            "fa-paste",
            "fa-clipboard",
            "fa-lightbulb-o",
            "fa-exchange",
            "fa-cloud-download",
            "fa-cloud-upload",
            "fa-user-md",
            "fa-stethoscope",
            "fa-suitcase",
            "fa-bell-o",
            "fa-coffee",
            "fa-cutlery",
            "fa-file-text-o",
            "fa-building-o",
            "fa-hospital-o",
            "fa-ambulance",
            "fa-medkit",
            "fa-fighter-jet",
            "fa-beer",
            "fa-h-square",
            "fa-plus-square",
            "fa-angle-double-left",
            "fa-angle-double-right",
            "fa-angle-double-up",
            "fa-angle-double-down",
            "fa-angle-left",
            "fa-angle-right",
            "fa-angle-up",
            "fa-angle-down",
            "fa-desktop",
            "fa-laptop",
            "fa-tablet",
            "fa-mobile-phone",
            "fa-mobile",
            "fa-circle-o",
            "fa-quote-left",
            "fa-quote-right",
            "fa-spinner",
            "fa-circle",
            "fa-mail-reply",
            "fa-reply",
            "fa-github-alt",
            "fa-folder-o",
            "fa-folder-open-o",
            "fa-smile-o",
            "fa-frown-o",
            "fa-meh-o",
            "fa-gamepad",
            "fa-keyboard-o",
            "fa-flag-o",
            "fa-flag-checkered",
            "fa-terminal",
            "fa-code",
            "fa-mail-reply-all",
            "fa-reply-all",
            "fa-star-half-empty",
            "fa-star-half-full",
            "fa-star-half-o",
            "fa-location-arrow",
            "fa-crop",
            "fa-code-fork",
            "fa-unlink",
            "fa-chain-broken",
            "fa-question",
            "fa-info",
            "fa-exclamation",
            "fa-superscript",
            "fa-subscript",
            "fa-eraser",
            "fa-puzzle-piece",
            "fa-microphone",
            "fa-microphone-slash",
            "fa-shield",
            "fa-calendar-o",
            "fa-fire-extinguisher",
            "fa-rocket",
            "fa-maxcdn",
            "fa-chevron-circle-left",
            "fa-chevron-circle-right",
            "fa-chevron-circle-up",
            "fa-chevron-circle-down",
            "fa-html5",
            "fa-css3",
            "fa-anchor",
            "fa-unlock-alt",
            "fa-bullseye",
            "fa-ellipsis-h",
            "fa-ellipsis-v",
            "fa-rss-square",
            "fa-play-circle",
            "fa-ticket",
            "fa-minus-square",
            "fa-minus-square-o",
            "fa-level-up",
            "fa-level-down",
            "fa-check-square",
            "fa-pencil-square",
            "fa-external-link-square",
            "fa-share-square",
            "fa-compass",
            "fa-toggle-down",
            "fa-caret-square-o-down",
            "fa-toggle-up",
            "fa-caret-square-o-up",
            "fa-toggle-right",
            "fa-caret-square-o-right",
            "fa-euro",
            "fa-eur",
            "fa-gbp",
            "fa-dollar",
            "fa-usd",
            "fa-rupee",
            "fa-inr",
            "fa-cny",
            "fa-rmb",
            "fa-yen",
            "fa-jpy",
            "fa-ruble",
            "fa-rouble",
            "fa-rub",
            "fa-won",
            "fa-krw",
            "fa-bitcoin",
            "fa-btc",
            "fa-file",
            "fa-file-text",
            "fa-sort-alpha-asc",
            "fa-sort-alpha-desc",
            "fa-sort-amount-asc",
            "fa-sort-amount-desc",
            "fa-sort-numeric-asc",
            "fa-sort-numeric-desc",
            "fa-thumbs-up",
            "fa-thumbs-down",
            "fa-youtube-square",
            "fa-youtube",
            "fa-xing",
            "fa-xing-square",
            "fa-youtube-play",
            "fa-dropbox",
            "fa-stack-overflow",
            "fa-instagram",
            "fa-flickr",
            "fa-adn",
            "fa-bitbucket",
            "fa-bitbucket-square",
            "fa-tumblr",
            "fa-tumblr-square",
            "fa-long-arrow-down",
            "fa-long-arrow-up",
            "fa-long-arrow-left",
            "fa-long-arrow-right",
            "fa-apple",
            "fa-windows",
            "fa-android",
            "fa-linux",
            "fa-dribbble",
            "fa-skype",
            "fa-foursquare",
            "fa-trello",
            "fa-female",
            "fa-male",
            "fa-gittip",
            "fa-sun-o",
            "fa-moon-o",
            "fa-archive",
            "fa-bug",
            "fa-vk",
            "fa-weibo",
            "fa-renren",
            "fa-pagelines",
            "fa-stack-exchange",
            "fa-arrow-circle-o-right",
            "fa-arrow-circle-o-left",
            "fa-toggle-left",
            "fa-caret-square-o-left",
            "fa-dot-circle-o",
            "fa-wheelchair",
            "fa-vimeo-square",
            "fa-turkish-lira",
            "fa-try",
            "fa-plus-square-o",
            "fa-space-shuttle",
            "fa-slack",
            "fa-envelope-square",
            "fa-wordpress",
            "fa-openid",
            "fa-institution",
            "fa-bank",
            "fa-university",
            "fa-mortar-board",
            "fa-graduation-cap",
            "fa-yahoo",
            "fa-google",
            "fa-reddit",
            "fa-reddit-square",
            "fa-stumbleupon-circle",
            "fa-stumbleupon",
            "fa-delicious",
            "fa-digg",
            "fa-pied-piper",
            "fa-pied-piper-alt",
            "fa-drupal",
            "fa-joomla",
            "fa-language",
            "fa-fax",
            "fa-building",
            "fa-child",
            "fa-paw",
            "fa-spoon",
            "fa-cube",
            "fa-cubes",
            "fa-behance",
            "fa-behance-square",
            "fa-steam",
            "fa-steam-square",
            "fa-recycle",
            "fa-automobile",
            "fa-car",
            "fa-cab",
            "fa-taxi",
            "fa-tree",
            "fa-spotify",
            "fa-deviantart",
            "fa-soundcloud",
            "fa-database",
            "fa-file-pdf-o",
            "fa-file-word-o",
            "fa-file-excel-o",
            "fa-file-powerpoint-o",
            "fa-file-photo-o",
            "fa-file-picture-o",
            "fa-file-image-o",
            "fa-file-zip-o",
            "fa-file-archive-o",
            "fa-file-sound-o",
            "fa-file-audio-o",
            "fa-file-movie-o",
            "fa-file-video-o",
            "fa-file-code-o",
            "fa-vine",
            "fa-codepen",
            "fa-jsfiddle",
            "fa-life-bouy",
            "fa-life-buoy",
            "fa-life-saver",
            "fa-support",
            "fa-life-ring",
            "fa-circle-o-notch",
            "fa-ra",
            "fa-rebel",
            "fa-ge",
            "fa-empire",
            "fa-git-square",
            "fa-git",
            "fa-hacker-news",
            "fa-tencent-weibo",
            "fa-qq",
            "fa-wechat",
            "fa-weixin",
            "fa-send",
            "fa-paper-plane",
            "fa-send-o",
            "fa-paper-plane-o",
            "fa-history",
            "fa-circle-thin",
            "fa-header",
            "fa-paragraph",
            "fa-sliders",
            "fa-share-alt",
            "fa-share-alt-square",
            "fa-bomb",
            "fa-soccer-ball-o",
            "fa-futbol-o",
            "fa-tty",
            "fa-binoculars",
            "fa-plug",
            "fa-slideshare",
            "fa-twitch",
            "fa-yelp",
            "fa-newspaper-o",
            "fa-wifi",
            "fa-calculator",
            "fa-paypal",
            "fa-google-wallet",
            "fa-cc-visa",
            "fa-cc-mastercard",
            "fa-cc-discover",
            "fa-cc-amex",
            "fa-cc-paypal",
            "fa-cc-stripe",
            "fa-bell-slash",
            "fa-bell-slash-o",
            "fa-trash",
            "fa-copyright",
            "fa-at",
            "fa-eyedropper",
            "fa-paint-brush",
            "fa-birthday-cake",
            "fa-area-chart",
            "fa-pie-chart",
            "fa-line-chart",
            "fa-lastfm",
            "fa-lastfm-square",
            "fa-toggle-off",
            "fa-toggle-on",
            "fa-bicycle",
            "fa-bus",
            "fa-ioxhost",
            "fa-angellist",
            "fa-cc",
            "fa-shekel",
            "fa-sheqel",
            "fa-ils",
            "fa-meanpath",
            // 'fa-angle-right', 'fa-asterisk', 'fa-times', 'fa-ban', 'fa-bar-chart-o', 'fa-flask',
            // 'fa-bell-o', 'fa-bell', 'fa-bitbucket-square', 'fa-bookmark-o', 'fa-building-o', 'fa-calendar-o',
            // 'fa-square-o', 'fa-minus-square-o', 'fa-check-square', 'fa-check-square-o', 
            // 'fa-chevron-circle-down', 'fa-chevron-circle-left', 'fa-chevron-circle-right', 
            // 'fa-chevron-circle-up', 'fa-arrow-circle-down', 'fa-arrow-circle-left', 
            // 'fa-arrow-circle-right', 'fa-arrow-circle-up', 'fa-circle-o', 'fa-dot-circle-o',
            // 'fa-rub', 'fa-minus-square-o', 'fa-caret-square-o-up', 'fa-caret-square-o-down', 
            // 'fa-comment-o', 'fa-comments-o', 'fa-files-o', 'fa-scissors', 'fa-tachometer', 
            // 'fa-angle-double-down', 'fa-angle-double-left', 'fa-angle-double-right', 'fa-angle-double-up', 
            // 'fa-arrow-circle-o-down', 'fa-download', 'fa-pencil-square', 'fa-pencil-square-o', 
            // 'fa-ellipsis-h', 'fa-ellipsis-v', 'fa-envelope-o', 'fa-exclamation-circle', 
            // 'fa-plus-square-o', 'fa-caret-square-o-right', 'fa-external-link-square', 'fa-eye-slash', 
            // 'fa-eye', 'fa-facebook-square', 'fa-video-camera', 'fa-file-o', 'fa-file-text-o', 
            // 'fa-flag-o', 'fa-folder-o', 'fa-folder', 'fa-folder-open-o', 'fa-cutlery', 'fa-frown-o', 
            // 'fa-arrows-alt', 'fa-github-square', 'fa-google-plus-square', 'fa-users', 'fa-h-square', 
            // 'fa-hand-o-down', 'fa-hand-o-left', 'fa-hand-o-right', 'fa-hand-o-up', 'fa-hdd-o', 'fa-heart-o',
            // 'fa-heart', 'fa-hospital-o', 'fa-outdent', 'fa-indent', 'fa-info-circle', 'fa-keyboard-o',
            // 'fa-gavel', 'fa-lemon-o', 'fa-lightbulb-o', 'fa-linkedin-square', 'fa-meh-o', 'fa-microphone-slash', 
            // 'fa-minus-square', 'fa-minus-circle', 'fa-mobile', 'fa-moon-o', 'fa-arrows', 'fa-power-off', 
            // 'fa-check-circle-o', 'fa-check-circle', 'fa-check', 'fa-paperclip', 'fa-clipboard', 
            // 'fa-phone-square', 'fa-picture-o', 'fa-pinterest-square', 'fa-play-circle-o', 
            // 'fa-play-circle', 'fa-plus-square', 'fa-plus-circle', 'fa-thumb-tack', 'fa-question-circle', 
            // 'fa-times-circle-o', 'fa-times-circle', 'fa-times', 'fa-bars', 'fa-expand', 'fa-arrows-h', 
            // 'fa-compress', 'fa-arrows-v', 'fa-rss-square', 'fa-floppy-o', 'fa-crosshairs', 'fa-share', 
            // 'fa-share-square', 'fa-share-square-o', 'fa-square', 'fa-sign-in', 'fa-sign-out', 'fa-smile-o', 
            // 'fa-sort-alpha-desc', 'fa-sort-alpha-asc', 'fa-sort-amount-desc', 'fa-sort-amount-asc', 
            // 'fa-sort-numeric-desc', 'fa-sort-numeric-asc', 'fa-sort-asc', 'fa-sort-desc', 
            // 'fa-stack-overflow', 'fa-star-o', 'fa-star-half-o', 'fa-sun-o', 'fa-thumbs-o-down', 
            // 'fa-thumbs-o-up', 'fa-clock-o', 'fa-trash-o', 'fa-tumblr-square', 'fa-twitter-square', 
            // 'fa-chain-broken', 'fa-arrow-circle-o-up', 'fa-upload', 'fa-exclamation-triangle', 
            // 'fa-xing-square', 'fa-youtube-square', 'fa-search-plus', 'fa-search-minus', 'fa-bicycle', 
            // 'fa-umbrella', 'fa-apple', 'fa-android', 'fa-book', 'fa-coffee', 'fa-female', 'fa-male', 
            // 'fa-laptop', 'fa-home', 'fa-leaf', 'fa-tablet', 'fa-dribbble'
        ),
        'pe' => array(
            'pe-7s-album', 'pe-7s-arc', 'pe-7s-back-2', 'pe-7s-bandaid', 'pe-7s-car', 'pe-7s-diamond',
            'pe-7s-door-lock', 'pe-7s-eyedropper', 'pe-7s-female', 'pe-7s-gym', 'pe-7s-hammer',
            'pe-7s-headphones', 'pe-7s-helm', 'pe-7s-hourglass', 'pe-7s-leaf', 'pe-7s-magic-wand',
            'pe-7s-male', 'pe-7s-map-2', 'pe-7s-next-2', 'pe-7s-paint-bucket', 'pe-7s-pendrive',
            'pe-7s-photo', 'pe-7s-piggy', 'pe-7s-plugin', 'pe-7s-refresh-2', 'pe-7s-rocket', 'pe-7s-settings',
            'pe-7s-shield', 'pe-7s-smile', 'pe-7s-usb', 'pe-7s-vector', 'pe-7s-wine', 'pe-7s-cloud-upload',
            'pe-7s-cash', 'pe-7s-close', 'pe-7s-bluetooth', 'pe-7s-cloud-download', 'pe-7s-way',
            'pe-7s-close-circle', 'pe-7s-id', 'pe-7s-angle-up', 'pe-7s-wristwatch', 'pe-7s-angle-up-circle',
            'pe-7s-world', 'pe-7s-angle-right', 'pe-7s-volume', 'pe-7s-angle-right-circle',
            'pe-7s-users', 'pe-7s-angle-left', 'pe-7s-user-female', 'pe-7s-angle-left-circle',
            'pe-7s-up-arrow', 'pe-7s-angle-down', 'pe-7s-switch', 'pe-7s-angle-down-circle', 'pe-7s-scissors',
            'pe-7s-wallet', 'pe-7s-safe', 'pe-7s-volume2', 'pe-7s-volume1', 'pe-7s-voicemail',
            'pe-7s-video', 'pe-7s-user', 'pe-7s-upload', 'pe-7s-unlock', 'pe-7s-umbrella', 'pe-7s-trash',
            'pe-7s-tools', 'pe-7s-timer', 'pe-7s-ticket', 'pe-7s-target', 'pe-7s-sun', 'pe-7s-study',
            'pe-7s-stopwatch', 'pe-7s-star', 'pe-7s-speaker', 'pe-7s-signal', 'pe-7s-shuffle',
            'pe-7s-shopbag', 'pe-7s-share', 'pe-7s-server', 'pe-7s-search', 'pe-7s-film', 'pe-7s-science',
            'pe-7s-disk', 'pe-7s-ribbon', 'pe-7s-repeat', 'pe-7s-refresh', 'pe-7s-add-user',
            'pe-7s-refresh-cloud', 'pe-7s-paperclip', 'pe-7s-radio', 'pe-7s-note2', 'pe-7s-print',
            'pe-7s-network', 'pe-7s-prev', 'pe-7s-mute', 'pe-7s-power', 'pe-7s-medal', 'pe-7s-portfolio',
            'pe-7s-like2', 'pe-7s-plus', 'pe-7s-left-arrow', 'pe-7s-play', 'pe-7s-key', 'pe-7s-plane',
            'pe-7s-joy', 'pe-7s-photo-gallery', 'pe-7s-pin', 'pe-7s-phone', 'pe-7s-plug', 'pe-7s-pen',
            'pe-7s-right-arrow', 'pe-7s-paper-plane', 'pe-7s-delete-user', 'pe-7s-paint', 'pe-7s-bottom-arrow',
            'pe-7s-notebook', 'pe-7s-note', 'pe-7s-next', 'pe-7s-news-paper', 'pe-7s-musiclist',
            'pe-7s-music', 'pe-7s-mouse', 'pe-7s-more', 'pe-7s-moon', 'pe-7s-monitor', 'pe-7s-micro',
            'pe-7s-menu', 'pe-7s-map', 'pe-7s-map-marker', 'pe-7s-mail', 'pe-7s-mail-open',
            'pe-7s-mail-open-file', 'pe-7s-magnet', 'pe-7s-loop', 'pe-7s-look', 'pe-7s-lock', 'pe-7s-lintern',
            'pe-7s-link', 'pe-7s-like', 'pe-7s-light', 'pe-7s-less', 'pe-7s-keypad', 'pe-7s-junk',
            'pe-7s-info', 'pe-7s-home', 'pe-7s-help2', 'pe-7s-help1', 'pe-7s-graph3', 'pe-7s-graph2',
            'pe-7s-graph1', 'pe-7s-graph', 'pe-7s-global', 'pe-7s-gleam', 'pe-7s-glasses', 'pe-7s-gift',
            'pe-7s-folder', 'pe-7s-flag', 'pe-7s-filter', 'pe-7s-file', 'pe-7s-expand1', 'pe-7s-exapnd2',
            'pe-7s-edit', 'pe-7s-drop', 'pe-7s-drawer', 'pe-7s-download', 'pe-7s-display2', 'pe-7s-display1',
            'pe-7s-diskette', 'pe-7s-date', 'pe-7s-cup', 'pe-7s-culture', 'pe-7s-crop', 'pe-7s-credit',
            'pe-7s-copy-file', 'pe-7s-config', 'pe-7s-compass', 'pe-7s-comment', 'pe-7s-coffee', 'pe-7s-cloud',
            'pe-7s-clock', 'pe-7s-check', 'pe-7s-chat', 'pe-7s-cart', 'pe-7s-camera', 'pe-7s-call',
            'pe-7s-calculator', 'pe-7s-browser', 'pe-7s-box2', 'pe-7s-box1', 'pe-7s-bookmarks', 'pe-7s-bicycle',
            'pe-7s-bell', 'pe-7s-battery', 'pe-7s-ball', 'pe-7s-back', 'pe-7s-attention', 'pe-7s-anchor',
            'pe-7s-albums', 'pe-7s-alarm', 'pe-7s-airplay'
        )
    );
}

add_action('admin_head','lt_style_script');
function lt_style_script(){
    echo '<script type="text/javascript">var ajaxurl="'.esc_js(admin_url('admin-ajax.php')).'";</script>';
    wp_enqueue_style( 'wp-color-picker');
    wp_register_style('lt-style', get_template_directory_uri() . '/admin/assets/css/lt-style.css');
    wp_enqueue_style('lt-style');
    wp_enqueue_script( 'wp-color-picker');
    wp_enqueue_script( 'lt-script', get_template_directory_uri() .'/admin/assets/js/lt-script.js', array(), null, true );
    lt_add_font_awesome_admin();
    lt_add_font_pe7s_admin();
}

// **********************************************************************// 
// ! Add Font Awesome, Font Pe7s, Font Elegant
// **********************************************************************// 
function lt_add_font_awesome_admin() {   
    wp_register_style('lt-font-awesome-style', get_template_directory_uri() . '/css/font-awesome-4.2.0/css/font-awesome.min.css');
    wp_enqueue_style('lt-font-awesome-style');
}

function lt_add_font_pe7s_admin() {   
    wp_register_style('lt-font-pe7s-style', get_template_directory_uri() . '/css/pe-icon-7-stroke/css/pe-icon-7-stroke.css');
    wp_register_style('lt-font-pe7s-helper-style', get_template_directory_uri() . '/css/pe-icon-7-stroke/css/helper.css');
    wp_enqueue_style('lt-font-pe7s-style');
    wp_enqueue_style('lt-font-pe7s-helper-style');
}

function lt_list_fonts_admin(){
    global $lt_list_icons;
    ?>
    <div class="lt-list-icons-select" data-fill="<?php echo esc_attr($_GET['fill']);?>">
	<h3>font awesome icons</h3>
        <?php foreach ($lt_list_icons['fa'] as $font){?>
            <a class="lt-fill-icon lt-fa-icon" href="javascript:void(0);" data-val="fa <?php echo esc_attr($font);?>"><i class="fa <?php echo esc_attr($font);?>"></i></a>
        <?php }?>
	<hr />
	<h3>pe7s icons</h3>
        <?php foreach ($lt_list_icons['pe'] as $font){?>
            <a class="lt-fill-icon lt-pe7-icon" class="" href="javascript:void(0);" data-val="pe7-icon <?php echo esc_attr($font);?>"><i class="<?php echo esc_attr($font);?>"></i></a>
        <?php }?>
    </div>
    <?php
    die();
}
add_action('wp_ajax_lt_list_fonts_admin', 'lt_list_fonts_admin');
