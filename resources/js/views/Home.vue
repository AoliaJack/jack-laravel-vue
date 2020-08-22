<template>
    <div>
        <section class="hero bb">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="title title is-2">PHP Hosting</h1>
                    <h2 class="subtitleondary subtitle is-3">Cepat, handal, penuh dengan modul PHP yang anda butuhkan</h2>

                        <ul class="list-check">
                            <li><span>Solusi PHP untuk peforma query yang lebih cepat.</span></li>
                            <li><span>Konsumsi memori yang lebih rendah.</span></li>
                            <li><span>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</span></li>
                            <li><span>Fitur enkripsi ionCube dan Zend Guard Loaders</span></li>
                        </ul>


                </div>
                <div class="column">
                    <img :src="'/svg/illustration banner PHP hosting-01.svg'" alt="">
                </div>
            </div>
        </div>
    </div>

</section>
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    <div class="columns" style="align-items: baseline">
                        <div class="column">
                            <p class="has-text-centered ">
                                <embed :src="'/svg/icon PHP Hosting_zendguard.svg'" alt="">
                            </p>
                            <p>
                                <h6 class="subtitle has-text-centered is-6 m-t-md">PHP Zend Guard Loader</h6>
                            </p>
                        </div>
                        <div class="column">
                            <p class="has-text-centered">
                                <embed :src="'/svg/icon PHP Hosting_composer.svg'" alt="">
                            </p>
                            <p>
                                <h6 class="subtitle has-text-centered is-6 m-t-md">PHP Composer</h6>
                            </p>
                        </div>
                        <div class="column">
                            <p class="has-text-centered">
                                <embed :src="'/svg/icon PHP Hosting_ioncube.svg'" alt="">
                            </p>
                            <p>
                                <h6 class="subtitle has-text-centered is-6 m-t-md">PHP ionCube Loader</h6>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <h3 class="title is-3 title has-text-centered">Paket Hosting Singapura yang tepat</h3>
            <h3 class="subtitle is-3 subtitleondary has-text-centered">Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
            <div class="columns">
                <div class="column">
                    <div class="pricing-table is-comparative">
                        <div class="pricing-plan" v-for="price in pricing" :key="price.id" v-bind:class="{ 'is-active': price.status == 1 }">
                            <div v-show="price.status == 1" class="ribbon ribbon-top-left"><span>BEST SELLER!</span></div>
                            <div class="plan-header price-title">{{ price.name }}</div>
                            <div class="plan-price is-size-6" v-bind:class="{ 'has-text-white': price.status == 1 }"><del>{{ price.price }}</del></div>
                            <div class="plan-price"><span class="plan-price-amount title" v-bind:class="{ 'has-text-white': price.status == 1 }"><span class="plan-price-currency subtitleondary" v-bind:class="{ 'has-text-white': price.status == 1 }">Rp</span><b>14</b><span v-bind:class="{ 'has-text-white': price.status == 1 }" class="plan-price-currency" >900 /bln</span></span></div>
                            <div class="plan-items">
                                <div class="plan-user" data-feature="Pengguna" v-bind:class="{ 'border-top': price.status == 0 }">{{ price.user }} Pengguna Terdaftar</div>
                                <div class="plan-item" data-feature="features">
                                    <ul v-for="feature in price.features">
                                        <li><b>{{ feature.fname }}</b> {{ feature.fdesc }}</li>
                                    </ul>
                                    <a href="#" class="m-t-lg button is-rounded" v-bind:class="{ 'is-info': price.status == 1, 'is-dark is-outlined ': price.status == 0 }">Pilih Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <h2 class="subtitle is-3 has-text-centered">Powerful dengan Limit PHP yang Lebih Besar</h2>
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    <div class="columns">
                        <div class="column">
                            <table class="table is-bordered is-striped is-fullwidth">
                                <tr>
                                    <td class="has-text-centered"><span class="icon"><img :src="'/images/check.png'" alt="" width="15"></span>  <span class="">Max execution time 300s</span></td>
                                </tr>
                                <tr>
                                    <td class="has-text-centered"><span class="icon"><img :src="'/images/check.png'" alt="" width="15"></span> <span>Max execution time 300s</span></td>
                                </tr>
                                <tr>
                                    <td class="has-text-centered"><span class="icon"><img :src="'/images/check.png'" alt="" width="15"></span> <span>php memory limit 1024 MB</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="column">
                            <table class="table is-bordered is-striped is-fullwidth">
                                <tr>
                                    <td class="has-text-centered"><span class="icon"><img :src="'/images/check.png'" alt="" width="15"></span> <span>post max size 128 MB</span></td>
                                </tr>
                                <tr>
                                    <td class="has-text-centered"><span class="icon"><img :src="'/images/check.png'" alt="" width="15"></span> <span>upload max filesize 128 MB</span></td>
                                </tr>
                                <tr>
                                    <td class="has-text-centered"><span class="icon"><img :src="'/images/check.png'" alt="" width="15"></span> <span>max input vars 2500</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="small-line">
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="subtitle is-3 has-text-centered">Semua Paket Hosting Sudah Termasuk</h1>
            <div class="columns is-multiline is-variable is-5">
                <div class="column is-4 has-text-centered">
                    <img :src="'/svg/icon PHP Hosting_PHP Semua Versi.svg'" alt="" width="100px">
                    <h4 class="title is-4">PHP Semua Versi</h4>
                    <h6 class="subtitle is-6">Pilih mulai dari versi PHP 5.3 s/d PHP 7. <br>Ubah sesuka Anda! </h6>
                </div>
                <div class="column is-4 has-text-centered">
                    <img :src="'/svg/icon PHP Hosting_My SQL.svg'" alt="" width="100px">
                    <h4 class="title is-4">MySQL Versi 5.6</h4>
                    <h6 class="subtitle is-6">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur </h6>
                </div>
                <div class="column is-4 has-text-centered">
                    <img :src="'/svg/icon PHP Hosting_CPanel.svg'" alt="" width="100px">
                    <h4 class="title is-4">Panel Hosting cPanel</h4>
                    <h6 class="subtitle is-6">Kelola website dengan panel canggih yang familiar di hati Anda </h6>
                </div>
                <div class="column is-4 has-text-centered">
                    <img :src="'/svg/icon PHP Hosting_garansi uptime.svg'" alt="" width="100px">
                    <h4 class="title is-4">Garansi Uptime 99.9%</h4>
                    <h6 class="subtitle is-6">Data center yang mendukung kelangsungan website Anda 24/7 </h6>
                </div>
                <div class="column is-4 has-text-centered">
                    <img :src="'/svg/icon PHP Hosting_InnoDB.svg'" alt="" width="100px">
                    <h4 class="title is-4">Database InnoDB Unlimited</h4>
                    <h6 class="subtitle is-6">Jumlah data dan ukuran database yang tumbuh sesuai kebutuhan Anda </h6>
                </div>
                <div class="column is-4 has-text-centered">
                    <img :src="'/svg/icon PHP Hosting_My SQL remote.svg'" alt="" width="100px">
                    <h4 class="title is-4">Wildcard Remote MySQL</h4>
                    <h6 class="subtitle is-6">Mendukung s/d 25 max_user_connections dan 100 max_connections</h6>
                </div>

            </div>
        </div>
    </div>
</section>
<hr class="small-line">
<section class="hero bb">
    <div class="hero-body p-b-none">
        <div class="container">
            <h3 class="subtitle is-3 has-text-centered">Mendukung Penuh Framework Laravel</h3>
            <div class="columns is-variable is-8">
                <div class="column">
                    <h6 class="subtitle is-5">
                        Tak perlu menggunakan dedicated server atau VPS yang mahal. Layanan PHP murah kami mendukung penuh framework favorit Anda
                    </h6>
                    <ul class="list-check">
                        <li>Install Laravel <b>1 klik</b> dengan Softaculous Installer. </li>
                        <li>Mendukung Ekstensi PHP MCrypt, phar, mbstring, json, dan fileindo</li>
                        <li>Tersedia Composer dan SSH untuk menginstall packages pilihan anda.</li>
                    </ul>
                    <p class="m-t-md">
                        <small class="has-text-grey">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
                    </p>

                    <p class="m-t-md">
                        <a href="#" class="button is-rounded is-info is-medium">Pilih Hosting Anda </a>
                    </p>
                </div>
                <div class="column">
                    <img :src="'/svg/illustration banner support laravel hosting.svg'" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="hero">
        <div class="hero-body">
            <div class="container">
                <h3 class="subtitle is-3 has-text-centered">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h3>
                <div class="columns">
                    <div class="column is-10 is-offset-1">
                        <div class="columns">
                            <div class="column">
                                <ul>
                                    <li>Ice PHP</li>
                                    <li>apc</li>
                                    <li>apcu</li>
                                    <li>apm</li>
                                    <li>ares</li>
                                    <li>bcmath</li>
                                    <li>bcompiler</li>
                                    <li>big_int</li>
                                    <li>bitset</li>
                                    <li>bloomy</li>
                                    <li>bz2_filter</li>
                                    <li>clamav</li>
                                    <li>coin_acceptor</li>
                                    <li>crack</li>
                                    <li>dba</li>
                                </ul>
                            </div>
                            <div class="column">
                                <ul>
                                    <li>http</li>
                                    <li>huffman</li>
                                    <li>idn</li>
                                    <li>igbinary</li>
                                    <li>imagick</li>
                                    <li>imap</li>
                                    <li>inclued</li>
                                    <li>inotify</li>
                                    <li>interbase</li>
                                    <li>intl</li>
                                    <li>ioncube_loader</li>
                                    <li>ioncube_loader_4</li>
                                    <li>jsmin</li>
                                    <li>json</li>
                                    <li>ldap</li>
                                </ul>
                            </div>
                            <div class="column">
                                <ul>
                                    <li>nd_pdo_mysql</li>
                                    <li>oauth</li>
                                    <li>oci8</li>
                                    <li>odbc</li>
                                    <li>opcache</li>
                                    <li>pdf</li>
                                    <li>pdo</li>
                                    <li>pdo_dblib</li>
                                    <li>pdo_firebird</li>
                                    <li>pdo_mysql</li>
                                    <li>pdo_odbc</li>
                                    <li>pdo_pgsql</li>
                                    <li>pdo_sqlite</li>
                                    <li>pgsql</li>
                                    <li>phalcon</li>
                                </ul>
                            </div>
                            <div class="column">
                                <ul>
                                    <li>stats</li>
                                    <li>stem</li>
                                    <li>stomp</li>
                                    <li>suhosin</li>
                                    <li>sybase_ct</li>
                                    <li>sysvmsg</li>
                                    <li>sysvsem</li>
                                    <li>sysvshm</li>
                                    <li>tidy</li>
                                    <li>timezonedb</li>
                                    <li>trader</li>
                                    <li>translit</li>
                                    <li>uploadprogress</li>
                                    <li>uri_template</li>
                                    <li>uuid</li>
                                </ul>
                            </div>
                        </div>
                        <p class="has-text-centered m-t-lg">
                            <a href="#" class="button is-rounded is-dark is-outlined is-medium">Selengkapnya </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-variable is-8">
                <div class="column">
                    <h3 class="subtitle is-3">
                        Linux Hosting yang Stabil dengan Teknologi LVE
                    </h3>
                    <p>
                        SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b> LVE CloudLinux</b>
                         untuk stabilitas server Anda. Dilengkapi dengan <b> SSD </b> untuk kecepatan <b>MySQL</b> dengan caching. Apache
                         load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection
                         dan auto backup untuk keamanan website PHP Anda.
                    </p>
                    <p class="m-t-md">
                        <a href="#" class="button is-rounded is-info is-medium">Pilih Hosting Anda </a>
                    </p>

                </div>
                <div class="column">
                    <img :src="'/images/Image support.png'" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero is-light is-small">
    <div class="hero-body">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <p class="title is-6">Bagikan jika Anda menyukai ini.</p>
                    </div>
                </div>
                <div class="level-right">
                    <div class="level-item">
                        <a href="#"><img :src="'/images/facebook.png'"  alt="" width="40"> </a> <a href="#" class="button is-static">80k</a>

                    </div>
                    <div class="level-item">
                        <a href="#"><img :src="'/images/twitter.png'"  alt="" width="40"> </a> <a href="#" class="button is-static">80k</a>

                    </div>
                    <div class="level-item">
                        <a href="#"><img :src="'/images/google-plus.png'"  alt="" width="40"> </a> <a href="#" class="button is-static">80k</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero is-info">
    <div class="hero-body">
        <div class="container">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <h3 class="subtitle is-3">Perlu <span class="title">BANTUAN?</span> Hubungi Kami : <span class="title">0274-5305505</span></h3>
                    </div>
                </div>
                <div class="level-right">
                    <div class="level-item">
                        <button class="button is-info is-inverted is-outlined is-rounded is-medium">Live Chat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                pricing: []
            }
        },
        created() {
            let uri = 'http://localhost:8000/api/pricing';
            this.axios.get(uri).then(response => {
                this.pricing = response.data.data;
            });
        }
    }
</script>
