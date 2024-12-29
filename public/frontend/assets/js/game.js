$(document).ready(function() {
    const base_url = window.location.origin;

    const pertanyaan = [
        [
            'Apakah dia seorang laki-laki?',
            'Apakah dia berasal dari bidang Kominfo?',
            'Dia angkatan 2019?',
            'Dia berasal dari kota lumbung padi alias karawang?',
            'Doi berasal dari purwakarta?',
            'Dia berasal dari bekasi?'
        ],
        [
            'Apakah dia dari angkatan 2019?',
            'Dia seorang laki-laki?',
            'Dia berasal dari karawang?'
        ],
        [
            'Doi dari karawang yaa?',
            'Apa dia masuk bidang Kominfo?',
            'Dia dari bekasi kan?',
            'Hmm, apakah dia dari PSDM?',
            'Dia dari angkatan 18 bukan?'
        ],
        [
            'Ok ok, dia dari BPH bukan nih wkwk?',
            'Ahaaaa, Hobi dia nonton film?',
            'Dia dari bidang minat bakat bukan gais?',
            'Hobi dia olahraga?',
            'Hmm, Dia dari bidang kominfo?',
            'Siapa yaa hmm, Dia dari bidang Sosial Politik?',
            'Dia dari karawang bukan?',
            'Heyy, Dia dari angkatan 2019?',
        ],
        [
            'Dikit lagiiiii, dia dari minat bakat?',
            'Hobinya emang anti mainstream wkwk. Hobinya berimajinasi bukan?',
            'Doi berasal dari bekasi bukan?',
            'dia jauh nih berasal dari subang ya?',
            'Aku tau nih, dia pake kacamata gak?',
            'Ohhiyaa, dia biasanya dipanggil soki?',
            'Dia berasal dari tangerang?',
            'Ladiess, dia berasal dari bidang PSDM?',
            'Ahaaa aku inget, dia punya logat khas jawa ya kalo ngomong? hihihi',
            'Hobinya maen gitar bukan?',
            'Tugas dia di BEM berhubungan ama uang?',
            'Doi suka travelling yaa?',
            'Hobinya membaca novel fiksi?',
        ],
        [
            'Dia berasal dari bidang yang bahas tentang sosial sama politik?',
            'Hobinya ngegame bukan?',
            'Doi berasal dari kota hujan bogor bukan?',
            'Doi berasal dari kota subang?',
            'Makanan favorit nya mie sukses? wkwk',
            'Doi suka banget ama voli?',
            'Dia biasanya dipanggil fen, iyaa bukan?',
        ],
        [
            'Aku hampir nemu jawabannya, Hobinya podcasting?',
            'Suka banget bersepeda? cepet jawab heyy..',
            'Biasa Dipanggil Koko?',
        ]
    ];

    const jawaban = [
        'Adam Darmawan',
        'Alia Fadilah',
        'Bonita pebrianti waluyan wijaya',
        'Dwi Suci Anggraeni',
        'Eno Hakimah Kusuma Dewi',
        'Faiz Ferdiansyah',
        'Fatma Eka Zulfiakhoir',
        'Fenny Rahmayani',
        'Fitri Novianti',
        'Ginal Fikri Al Hakim',
        'Giovanny Maria',
        'Irya Muhammad Riyadhi',
        'Karianah',
        'Lorenzo Tunggul Irvandito',
        'M.Rendy Baguspriawan',
        'Mauidzoh Hasanah',
        'Mohamad Alda',
        'mohammad bukhori pratama',
        'Muhammad Rizal Vahlevi',
        'nida tsuroya sholahuddin',
        'Nur Rizqi Alfiah',
        'Putri Dwi Rahayu',
        'Rafik kusumah',
        'Reynold Julian Tamba',
        'Ririn Nur Fauziyah',
        'Rizkiansyah',
        'Rizky Aditya',
        'Rona Febriana',
        'Salim Puad',
        'Stefanus Deo A',
        'Sultan Tira Al Farizi',
        'Syafina Haviyola',
        'Syahrul Chotamy AZ',
        'Syams Sulaeman',
        'Syauqi Sulthana Julianto',
        'Virgaria Zuliana',
        'Zidan Faizi',
        'Mohammad Bijantium Sinatria'
    ];


    function restartGame() {
        $("#restart").load(" #restart");
    }


    $(document).on("click", "#v-pills-2", function(e) {
        $('#body').removeClass('score');
        $('#body').addClass('start');
        e.preventDefault();
        sessionStorage.clear();
    });
    $(document).on("click", "#v-pills-3", function(e) {
        $('#body').removeClass('start');
        $('#body').addClass('score');
        e.preventDefault();
        sessionStorage.clear();
    });
    $(document).on("click", "#v-pills-1", function(e) {
        $('#body').removeClass('start');
        $('#body').removeClass('score');
    });


    function playGame() {
        $('#mulai').removeClass('mulai');
        $('#question').html(`
        <div class="row waiting">
            <div class="col-lg-12">
                <div class="loading">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>`);
        $('.waiting').addClass('active');
        $('#v-pills-1').addClass('stop-game');
        $('#v-pills-2').addClass('disabled');
        $('#v-pills-2').attr('disabled', 'disabled');
        $('#v-pills-3').addClass('stop-game');
        $('.navbar__item').addClass('disabled');
    }

    function persentase(start, end, duration) {
        let obj = $('.number-question'),
            current = start,
            range = end - start,
            increment = end > start ? 1 : -1,
            step = Math.abs(Math.floor(duration / range)),
            timer = setInterval(() => {
                current += increment;
                obj.html(current + '%');
                if (current == end) {
                    clearInterval(timer);
                }
            }, step);
    }


    $(document).on("click", "#btn-mulai", function(e) {
        e.preventDefault();
        playGame();
        breakQuestion();
        let acak = Math.floor(Math.random() * 6);
        if (acak == 0) {
            skenario0();
        } else if (acak == 1) {
            skenario1();
        } else if (acak == 2) {
            skenario2();
        } else if (acak == 3) {
            skenario3();
        } else if (acak == 4) {
            skenario4();
        } else if (acak == 5) {
            skenario5();
        }
    });


    function result(nama, deskripsi, skor, gambar, id) {
        $('.hasil-akhir').html(`
        <div class="col-lg-7 mt-2">
        <h5 class="tebakan mt-3">Kamu Sedang Memikirkan...</h5>
        <div class="small-box mt-4">
            <div class="animated-worm"></div>
            <div class="animated-worm"></div>
            <div class="animated-worm"></div>
            <div class="animated-worm"></div>
            <i class="fa fa-spinner fa-spin"></i>
        </div>
        </div>
        
            `);
        setTimeout(() => {
            $('.hasil-akhir').html(`
            <div class="col-lg-8">
            <h5 class="tebakan">Kamu Sedang Memikirkan...</h5>
            <div class="small-box mt-4">
                <div class="animated-worm"></div>
                <div class="animated-worm"></div>
                <div class="animated-worm"></div>
                <div class="animated-worm"></div>
                <img src="../frontend/assets/img/${gambar}" class="animate__animated animate__jackInTheBox animate__slow tokoh" style="width: 75px;" alt="">
            </div>
            <h5 class="nama-tokoh tebakan fw-bold mt-2" style="text-transform: uppercase;">${nama}</h5>
            <p class="deskripsi">${deskripsi}</p>
            <hr style="padding: 0 20px;">
            <i><small class="deskripsi">Tokoh ini ${skor} dipikirkan orang</small></i>
            <div class="row text-center justify-content-center mt-3" id="hasil-tebakan">
                <div class="col-lg-3 item-jawaban" id="betul" data-nama="${nama}" data-id="${id}">BETUL <i class="fa fa-check mx-1"></i></div>
                <div class="col-lg-3 item-jawaban" id="salah">SALAH <i class="fa fa-times mx-1"></i></div>
            </div>
            </div>
                `);
            jawabanAja();
        }, 3000);
    }


    function resultUnknown() {
        $('.hasil-akhir').html(`
        <div class="col-lg-7 mt-2">
        <h5 class="tebakan mt-3">Kamu Sedang Memikirkan...</h5>
        <div class="small-box mt-4">
            <div class="animated-worm"></div>
            <div class="animated-worm"></div>
            <div class="animated-worm"></div>
            <div class="animated-worm"></div>
            <i class="fa fa-spinner fa-spin"></i>
        </div>
        </div>
        
            `);
        setTimeout(() => {
            $('.hasil-akhir').html(`
            <div class="col-lg-8">
            <h5 class="tebakan">Kamu Sedang Memikirkan...</h5>
            <div class="small-box mt-4">
                <div class="animated-worm"></div>
                <div class="animated-worm"></div>
                <div class="animated-worm"></div>
                <div class="animated-worm"></div>
                <img src="../frontend/assets/img/game-user.png" class="animate__animated animate__jackInTheBox animate__slow tokoh" style="width: 75px;" alt="">
            </div>
            <h5 class="nama-tokoh tebakan fw-bold mt-2" style="text-transform: uppercase;">TIDAK DITEMUKAN</h5>
            <p>Tokoh yang kamu pikirkan sepertinya tidak kami temukan. Mungkin kamu salah memberikan jawaban, hmm mari kita coba lagi!..</p>
            <div class="row text-center justify-content-center mt-3" id="hasil-tebakan">
                <div class="col-lg-3 item-jawaban" id="salah">Coba Lagi</div>
            </div>
            </div>
                `);
            jawabanAja();
        }, 3000);
    }



    function jawabanAja() {
        $(document).on("click", "#betul", function(e) {
            e.preventDefault();

            let id_user = $(this).data('id');
            let nama = $(this).data('nama');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: base_url + "/savescore",
                type: 'post',
                data: {
                    "score": 1,
                    "id_user": id_user,
                    "nama": nama
                },
                success: function(response) {
                    sessionStorage.setItem("restart", "3");
                    location.reload();
                }
            });
        });
        $(document).on("click", "#salah", function(e) {
            e.preventDefault();
            let userResult = function(result) {
                if (result === 1) {
                    sessionStorage.setItem("restart", "2");
                    location.reload();
                }
            }
            tryAgain('Aku tidak menyerah, Mari coba lagi..', userResult);
        });
    }


    $(document).on("click", "#true1", function(e) {
        e.preventDefault();
        persentase(0, 20, 1000);
    });
    $(document).on("click", "#true2", function(e) {
        e.preventDefault();
        persentase(20, 30, 1000);
    });
    $(document).on("click", "#true3", function(e) {
        e.preventDefault();
        persentase(30, 50, 1000);
    });
    $(document).on("click", "#true4", function(e) {
        e.preventDefault();
        persentase(50, 60, 1000);
    });
    $(document).on("click", "#true5", function(e) {
        e.preventDefault();
        persentase(60, 65, 1000);
    });
    $(document).on("click", "#true6", function(e) {
        e.preventDefault();
        persentase(65, 80, 1000);
    });
    $(document).on("click", "#true7", function(e) {
        e.preventDefault();
        persentase(80, 90, 1000);
    });



    function breakQuestion() {
        $('#mulai').removeClass('mulai');
        $('#mulai-jawaban').removeClass('mulai');
        $('#question').html(`
                <div class="row waiting">
                    <div class="col-lg-12">
                        <div class="loading">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>`);
        $('.waiting').addClass('active');
    }


    function processQuestion(params1, params2) {
        setTimeout(() => {
            $('.waiting').removeClass('active');
            $('#question').html(pertanyaan[params1][params2]);
            $('#mulai-jawaban').addClass('mulai');
        }, 1000);
    }

    function gantiSkenario() {
        setTimeout(() => {
            $('.waiting').removeClass('active');
            $('#mulai-jawaban').addClass('mulai');
        }, 1000);
    }


    function tebak(id_user) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: base_url + "/getuser",
            type: 'post',
            data: {
                "id_user": id_user + 1,
            },
            success: function(response) {
                if (response.skor == 0) {
                    response.skor = 'belum pernah';
                } else {
                    response.skor = 'sudah ' + response.skor + 'x';
                }
                result(response.nama_lengkap, response.deskripsi, response.skor, 'game-user.png', response.id);
            },
            error: function(response) {
                location.reload();
            }
        });
    }


    function answerKey(params1, params2, no) {
        $('.ya').attr('id', params1 + no);
        $('.tidak').attr('id', params2 + no);
    }


    function skenario0() {
        setTimeout(() => {
            $('.waiting').removeClass('active');
            $('#question').html(pertanyaan[0][0]);
            $('#mulai-jawaban').addClass('mulai');
            answerKey('true', 'false', '1');
            $(document).on("click", "#true1", function(e) {
                e.preventDefault();
                breakQuestion();
                processQuestion(1, 0);
                answerKey('true', 'false', '2');
                $(document).on("click", "#true2", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(2, 0);
                    answerKey('true', 'false', '3');
                    $(document).on("click", "#true3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 3);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 0);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(29);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 0);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(0);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(33);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 1);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(16);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                resultUnknown();
                            });
                        });
                    });
                    $(document).on("click", "#false3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 4);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 2);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 1);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(14);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    breakQuestion();
                                    processQuestion(6, 0);
                                    answerKey('true', 'false', '7');
                                    $(document).on("click", "#true7", function(e) {
                                        e.preventDefault();
                                        tebak(32);
                                    });
                                    $(document).on("click", "#false7", function(e) {
                                        e.preventDefault();
                                        tebak(11);
                                    });
                                });
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 2);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    breakQuestion();
                                    processQuestion(6, 1);
                                    answerKey('true', 'false', '7');
                                    $(document).on("click", "#true7", function(e) {
                                        e.preventDefault();
                                        tebak(17);
                                    });
                                    $(document).on("click", "#false7", function(e) {
                                        e.preventDefault();
                                        breakQuestion();
                                        processQuestion(6, 2);
                                        answerKey('true', 'false', '8');
                                        $(document).on("click", "#true8", function(e) {
                                            e.preventDefault();
                                            tebak(25);
                                        });
                                        $(document).on("click", "#false8", function(e) {
                                            e.preventDefault();
                                            tebak(37);
                                        });
                                    });
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(23);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 3);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 0);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(30);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(28);
                                });
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 4);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(36);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    resultUnknown();
                                });
                            });
                        });
                    });
                });
                $(document).on("click", "#false2", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(2, 1);
                    answerKey('true', 'false', '3');
                    $(document).on("click", "#true3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 6);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 4);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(13);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 5);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(27);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(26);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 5);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(34);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                resultUnknown();
                            });
                        });
                    });
                    $(document).on("click", "#false3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 5);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(3, 6);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(5);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                resultUnknown();
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 4);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(18);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(4, 2);
                                answerKey('true', 'false', '5');
                                $(document).on("click", "#true5", function(e) {
                                    e.preventDefault();
                                    tebak(22);
                                });
                                $(document).on("click", "#false5", function(e) {
                                    e.preventDefault();
                                    tebak(9);
                                });
                            });
                        });
                    });
                });
            });
            $(document).on("click", "#false1", function(e) {
                e.preventDefault();
                breakQuestion();
                processQuestion(1, 2);
                answerKey('true', 'false', '2');
                $(document).on("click", "#true2", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(2, 4);
                    answerKey('true', 'false', '3');
                    $(document).on("click", "#true3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 1);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 7);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(1);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                tebak(6);
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 8);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(4);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                tebak(3);
                            });
                        });
                    });
                    $(document).on("click", "#false3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 2);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 9);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(24);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 6);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(7);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(10);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 10);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(2);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 5);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(31);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(8);
                                });
                            });
                        });
                    });
                });
                $(document).on("click", "#false2", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(2, 3);
                    answerKey('true', 'false', '3');
                    $(document).on("click", "#true3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 1);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            tebak(19);
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 11);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(21);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                tebak(12);
                            });
                        });
                    });
                    $(document).on("click", "#false3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 0);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 12);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(35);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                tebak(20);
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            tebak(15);
                        });
                    });
                });
            });

        }, 3000);
    }




    function skenario1() {
        setTimeout(() => {
            $('.waiting').removeClass('active');
            $('#question').html(pertanyaan[0][1]);
            $('#mulai-jawaban').addClass('mulai');
            answerKey('true', 'false', '100');
            $(document).on("click", "#true100", function(e) {
                e.preventDefault();
                breakQuestion();
                processQuestion(1, 0);
                answerKey('true', 'false', '200');
                $(document).on("click", "#true200", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(2, 2);
                    answerKey('true', 'false', '5');
                    $(document).on("click", "#true5", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(5, 1);
                        answerKey('true', 'false', '6');
                        $(document).on("click", "#true6", function(e) {
                            e.preventDefault();
                            tebak(14);
                        });
                        $(document).on("click", "#false6", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(6, 0);
                            answerKey('true', 'false', '7');
                            $(document).on("click", "#true7", function(e) {
                                e.preventDefault();
                                tebak(32);
                            });
                            $(document).on("click", "#false7", function(e) {
                                e.preventDefault();
                                tebak(11);
                            });
                        });
                    });
                    $(document).on("click", "#false5", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(5, 2);
                        answerKey('true', 'false', '6');
                        $(document).on("click", "#true6", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(6, 1);
                            answerKey('true', 'false', '7');
                            $(document).on("click", "#true7", function(e) {
                                e.preventDefault();
                                tebak(17);
                            });
                            $(document).on("click", "#false7", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(6, 2);
                                answerKey('true', 'false', '8');
                                $(document).on("click", "#true8", function(e) {
                                    e.preventDefault();
                                    tebak(25);
                                });
                                $(document).on("click", "#false8", function(e) {
                                    e.preventDefault();
                                    tebak(37);
                                });
                            });
                        });
                        $(document).on("click", "#false6", function(e) {
                            e.preventDefault();
                            tebak(23);
                        });
                    });
                });
                $(document).on("click", "#false200", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(2, 0);
                    answerKey('true', 'false', '4');
                    $(document).on("click", "#true4", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(4, 4);
                        answerKey('true', 'false', '5');
                        $(document).on("click", "#true5", function(e) {
                            e.preventDefault();
                            tebak(13);
                        });
                        $(document).on("click", "#false5", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(5, 5);
                            answerKey('true', 'false', '6');
                            $(document).on("click", "#true6", function(e) {
                                e.preventDefault();
                                tebak(27);
                            });
                            $(document).on("click", "#false6", function(e) {
                                e.preventDefault();
                                tebak(26);
                            });
                        });
                    });
                    $(document).on("click", "#false4", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(4, 5);
                        answerKey('true', 'false', '5');
                        $(document).on("click", "#true5", function(e) {
                            e.preventDefault();
                            tebak(34);
                        });
                        $(document).on("click", "#false5", function(e) {
                            e.preventDefault();
                            resultUnknown();
                        });
                    });
                });
            });
            $(document).on("click", "#false100", function(e) {
                breakQuestion();
                skenario0();
            });
        }, 3000);
    }




    function skenario2() {
        setTimeout(() => {
            $('.waiting').removeClass('active');
            $('#question').html(pertanyaan[0][2]);
            $('#mulai-jawaban').addClass('mulai');
            answerKey('true', 'false', '100');
            $(document).on("click", "#true100", function(e) {
                e.preventDefault();
                breakQuestion();
                processQuestion(1, 1);
                answerKey('true', 'false', '200');
                $(document).on("click", "#true200", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(2, 0);
                    answerKey('true', 'false', '3');
                    $(document).on("click", "#true3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 3);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 0);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(29);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 0);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(0);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(33);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 1);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(16);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                resultUnknown();
                            });
                        });
                    });
                    $(document).on("click", "#false3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 4);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 2);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 1);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(14);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    breakQuestion();
                                    processQuestion(6, 0);
                                    answerKey('true', 'false', '7');
                                    $(document).on("click", "#true7", function(e) {
                                        e.preventDefault();
                                        tebak(32);
                                    });
                                    $(document).on("click", "#false7", function(e) {
                                        e.preventDefault();
                                        tebak(11);
                                    });
                                });
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 2);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    breakQuestion();
                                    processQuestion(6, 1);
                                    answerKey('true', 'false', '7');
                                    $(document).on("click", "#true7", function(e) {
                                        e.preventDefault();
                                        tebak(17);
                                    });
                                    $(document).on("click", "#false7", function(e) {
                                        e.preventDefault();
                                        breakQuestion();
                                        processQuestion(6, 2);
                                        answerKey('true', 'false', '8');
                                        $(document).on("click", "#true8", function(e) {
                                            e.preventDefault();
                                            tebak(25);
                                        });
                                        $(document).on("click", "#false8", function(e) {
                                            e.preventDefault();
                                            tebak(37);
                                        });
                                    });
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(23);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 3);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 0);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(30);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(28);
                                });
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 4);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(36);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    resultUnknown();
                                });
                            });
                        });
                    });
                });
                $(document).on("click", "#false200", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(2, 0);
                    answerKey('true', 'false', '3');
                    $(document).on("click", "#true3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 2);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 9);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(24);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 6);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(7);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(10);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 10);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(2);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 5);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(31);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(8);
                                });
                            });
                        });
                    });
                    $(document).on("click", "#false3", function(e) {
                        breakQuestion();
                        skenario0();
                    });
                });
            });
            $(document).on("click", "#false100", function(e) {
                breakQuestion();
                skenario0();
            });
        }, 3000);
    }


    function skenario3() {
        setTimeout(() => {
            $('.waiting').removeClass('active');
            $('#question').html(pertanyaan[0][3]);
            $('#mulai-jawaban').addClass('mulai');
            answerKey('true', 'false', '100');
            $(document).on("click", "#true100", function(e) {
                e.preventDefault();
                breakQuestion();
                processQuestion(1, 1);
                answerKey('true', 'false', '200');
                $(document).on("click", "#true200", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(1, 0);
                    answerKey('true', 'false', '3');
                    $(document).on("click", "#true3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 3);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 0);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(29);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 0);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(0);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(33);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 1);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(16);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                resultUnknown();
                            });
                        });
                    });
                    $(document).on("click", "#false3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 4);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 4);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(13);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 5);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(27);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(26);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(3, 5);
                            answerKey('true', 'false', '4');
                            $(document).on("click", "#true4", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(3, 6);
                                answerKey('true', 'false', '5');
                                $(document).on("click", "#true5", function(e) {
                                    e.preventDefault();
                                    tebak(5);
                                });
                                $(document).on("click", "#false5", function(e) {
                                    e.preventDefault();
                                    resultUnknown();
                                });
                            });
                            $(document).on("click", "#false4", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(4, 4);
                                answerKey('true', 'false', '5');
                                $(document).on("click", "#true5", function(e) {
                                    e.preventDefault();
                                    tebak(18);
                                });
                                $(document).on("click", "#false5", function(e) {
                                    e.preventDefault();
                                    breakQuestion();
                                    processQuestion(4, 2);
                                    answerKey('true', 'false', '5');
                                    $(document).on("click", "#true5", function(e) {
                                        e.preventDefault();
                                        tebak(22);
                                    });
                                    $(document).on("click", "#false5", function(e) {
                                        e.preventDefault();
                                        tebak(9);
                                    });
                                });
                            });
                        });
                    });
                });
                $(document).on("click", "#false200", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(2, 4);
                    answerKey('true', 'false', '3');
                    $(document).on("click", "#true3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 1);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 7);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(1);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                tebak(6);
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 8);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(4);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                tebak(3);
                            });
                        });
                    });
                    $(document).on("click", "#false3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(3, 2);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 9);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(24);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 6);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(7);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(10);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(4, 10);
                            answerKey('true', 'false', '5');
                            $(document).on("click", "#true5", function(e) {
                                e.preventDefault();
                                tebak(2);
                            });
                            $(document).on("click", "#false5", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(5, 5);
                                answerKey('true', 'false', '6');
                                $(document).on("click", "#true6", function(e) {
                                    e.preventDefault();
                                    tebak(31);
                                });
                                $(document).on("click", "#false6", function(e) {
                                    e.preventDefault();
                                    tebak(8);
                                });
                            });
                        });
                    });
                });
            });
            $(document).on("click", "#false100", function(e) {
                breakQuestion();
                skenario2();
            });
        }, 3000);
    }


    function skenario4() {
        setTimeout(() => {
            $('.waiting').removeClass('active');
            $('#question').html(pertanyaan[0][4]);
            $('#mulai-jawaban').addClass('mulai');
            answerKey('true', 'false', '100');
            $(document).on("click", "#true100", function(e) {
                e.preventDefault();
                breakQuestion();
                processQuestion(1, 1);
                answerKey('true', 'false', '200');
                $(document).on("click", "#true200", function(e) {
                    e.preventDefault();
                    tebak(18);
                });
                $(document).on("click", "#false200", function(e) {
                    e.preventDefault();
                    tebak(19);
                });
            });
            $(document).on("click", "#false100", function(e) {
                breakQuestion();
                skenario0();
            });
        }, 3000);
    }


    function skenario5() {
        setTimeout(() => {
            $('.waiting').removeClass('active');
            $('#question').html(pertanyaan[0][5]);
            $('#mulai-jawaban').addClass('mulai');
            answerKey('true', 'false', '100');
            $(document).on("click", "#true100", function(e) {
                e.preventDefault();
                breakQuestion();
                processQuestion(1, 0);
                answerKey('true', 'false', '200');
                $(document).on("click", "#true200", function(e) {
                    e.preventDefault();
                    breakQuestion();
                    processQuestion(1, 1);
                    answerKey('true', 'false', '3');
                    $(document).on("click", "#true3", function(e) {
                        e.preventDefault();
                        breakQuestion();
                        processQuestion(2, 1);
                        answerKey('true', 'false', '4');
                        $(document).on("click", "#true4", function(e) {
                            e.preventDefault();
                            breakQuestion();
                            processQuestion(5, 1);
                            answerKey('true', 'false', '6');
                            $(document).on("click", "#true6", function(e) {
                                e.preventDefault();
                                tebak(14);
                            });
                            $(document).on("click", "#false6", function(e) {
                                e.preventDefault();
                                breakQuestion();
                                processQuestion(6, 0);
                                answerKey('true', 'false', '7');
                                $(document).on("click", "#true7", function(e) {
                                    e.preventDefault();
                                    tebak(32);
                                });
                                $(document).on("click", "#false7", function(e) {
                                    e.preventDefault();
                                    tebak(11);
                                });
                            });
                        });
                        $(document).on("click", "#false4", function(e) {
                            e.preventDefault();
                            resultUnknown();
                        });
                    });
                    $(document).on("click", "#false3", function(e) {
                        breakQuestion();
                        skenario0();
                    });
                });
                $(document).on("click", "#false200", function(e) {
                    breakQuestion();
                    skenario2();
                });
            });
            $(document).on("click", "#false100", function(e) {
                breakQuestion();
                skenario4();
            });
        }, 3000);
    }


    $(document).on("click", ".stop-game", function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let userResult = function(result) {
            if (result === 1) {
                sessionStorage.setItem("restart", id);
                location.reload();
            } else {

            }
        }
        toggleModal('Game sedang berjalan! Jika pindah halaman, game akan berakhir.', userResult);
    });



    function toggleModal(text, callback) {
        $wrapper = $('<div id="modal-wrapper"></div>').appendTo('body');
        $modal = $('<div id="modal-confirmation"><div id="modal-header"><h3><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Hey Mau Kemana?</h3><span data-confirm=0 class="modal-action" id="modal-close"><i class="fa fa-times" aria-hidden="true"></i></span></div><div id="modal-content"><p>' + text + '</p></div><div id="modal-buttons"><button class="modal-action" data-confirm=0 id="modal-button-no">Lanjut Main</button><button class="modal-action" data-confirm=1 id="modal-button-yes">Iya</button></div></div>').appendTo($wrapper);
        setTimeout(function() {
            $wrapper.addClass('active');
        }, 100);
        $wrapper.find('.modal-action').click(function() {
            let result = $(this).data('confirm');
            $wrapper.removeClass('active').delay(500).queue(function() {
                $wrapper.remove();
                callback(result);
            });
        });
    }


    function tryAgain(text, callback) {
        $wrapper = $('<div id="modal-wrapper"></div>').appendTo('body');
        $modal = $('<div id="modal-confirmation"><div id="modal-header"><h3><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Mari Coba Lagi</h3><span data-confirm=0 class="modal-action" id="modal-close"><i class="fa fa-times" aria-hidden="true"></i></span></div><div id="modal-content"><p>' + text + '</p></div><div id="modal-buttons"><button class="modal-action" data-confirm=1 id="modal-button-yes">Siap!</button></div></div>').appendTo($wrapper);
        setTimeout(function() {
            $wrapper.addClass('active');
        }, 100);
        $wrapper.find('.modal-action').click(function() {
            let result = $(this).data('confirm');
            $wrapper.removeClass('active').delay(500).queue(function() {
                $wrapper.remove();
                callback(result);
            });
        });
    }


    function restartGame(data) {
        let id = data;

        $('.navbar__item').removeClass('active');
        $('.navbar__item').removeClass('stop-game');
        $('.navbar__item').removeAttr('aria-selected', 'true');
        $('.tab-pane').removeClass('show active');
        $('#v-pills-' + id).removeClass('stop-game');
        $('#v-pills-' + id).addClass('active');
        $('#v-pills-' + id).removeAttr('aria-selected', 'false');
        $('#v-pills-' + id).attr('aria-selected', 'true');
        $('#v-pills--' + id).addClass('show active');
        $('.navbar__item').removeClass('disabled');
        $('.navbar__item').removeAttr('disabled', 'disabled');
        sessionStorage.clear();
    }


    if (sessionStorage.getItem('restart') != null) {
        restartGame(sessionStorage.getItem('restart'));
    }

});