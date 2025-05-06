                    <h5 class="card-title fw-bold mb-3">Negara yang harus kamu kunjungin🏆🤩</h5>
                    <button id="interButton" class="btn btn-outline-primary rounded-pill active">Internasional</button>
                    <button id="indoButton" class="btn btn-outline-primary rounded-pill">Indonesia</button>

                    
                    <div id="negaraContainer">
                        <!-- internasional -->
                        <div id="internationalContent" class="negara-container">
                            <div class="row align-items-start g-3 mt-0 mt-lg-2">
                                <div class="col">
                                    <img src="image/negara/singapore.jpg" class="rounded-4" style="width: 280px;">
                                </div>
                                <div class="col">
                                    <img src="image/negara/malaysia.jpg" class="rounded-4" style="width: 280px;">
                                </div>
                                <div class="col">
                                    <img src="image/negara/sydney.jpg" class="rounded-4" style="width: 280px;">
                                </div>
                                <div class="col">
                                    <img src="image/negara/vietnam.jpg" class="rounded-4" style="width: 280px;">
                                </div>
                            </div>
                        </div>

                        

                        <!-- lokal -->
                        <div id="localContent" class="negara-container" style="display: none;">
                            <div class="row align-items-start g-3 mt-0 mt-lg-2">
                                <div class="col">
                                    <img src="image/negara/jakarta.jpg" class="rounded-4" style="width: 280px;">
                                </div>
                                <div class="col">
                                    <img src="image/negara/bali.jpg" class="rounded-4" style="width: 280px;">
                                </div>
                                <div class="col">
                                    <img src="image/negara/yogyakarta.png" class="rounded-4" style="width: 280px;">
                                </div>
                                <div class="col">
                                    <img src="image/negara/palembang.jpg" class="rounded-4" style="width: 280px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const interButton = document.getElementById('interButton');
                            const indoButton = document.getElementById('indoButton');
                            const internationalContent = document.getElementById('internationalContent');
                            const localContent = document.getElementById('localContent');

                            interButton.addEventListener('click', function(){
                                internationalContent.style.display = 'block';
                                localContent.style.display = 'none';

                                interButton.classList.add('active');
                                indoButton.classList.remove('active')
                            });

                            indoButton.addEventListener('click', function(){
                                localContent.style.display = 'block';
                                internationalContent.style.display = 'none';

                                indoButton.classList.add('active');
                                interButton.classList.remove('active');
                            });
                        });
                    </script>