<link rel="stylesheet" href="/css/style.css">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<x-app-layout>
    <div class="py-12 p-2">
        <div class="text-flex items-center justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Categoria sobre --}}
            <div class="text-center" id="sobre">
                <p class="text-4xl text-gray-800 font-bold">Boas-vindas, {{ Auth::user()?->name ?? 'Usuário' }}</p>

                <div class="bg-white p-5 rounded-lg border-6 mx-auto my-8 w-1/2">
                    <img src="{{ asset('image/restaurantTagline.png') }}" alt="restaurant tagline" class="w-full">
                    <figcaption class="bg-white font-bold text-gray-800 text-2xl">Restaurant Tagline</figcaption>
                </div>

                <div class="mt-10 mb-10 p-10 bg-orange-100 rounded-lg flex justify-center">
                    <nav>
                        <ul class="list-none flex flex-wrap gap-4">
                            <li id="sobre"><a href="{{ url('#') }}">Sobre</a></li>
                            <li id="cardapios"><a href="{{ url('#') }}">Cardapios</a></li>
                            <li id="redes-sociais"><a href="{{ url('#') }}">Redes sociais</a></li>
                            <li id="questionário"><a href="{{ url('#') }}">Questionário</a></li>
                        </ul>
                    </nav>
                </div>

                <div>
                    <section>
                        @php
                            $aviso1 =
                                'É com grande entusiasmo que damos as boas-vindas ao nosso incrível e inusitado Restaurant Tagline.';
                            $aviso2 =
                                'Apresentando os três pratos mais apreciados pelos nossos clientes. Preparem-se para deliciar-se com essas iguarias';
                            $aviso3 = 'Em seguida, convidamos vocês a explorar os nossos cardápios do restaurante!';
                            $aviso4 =
                                'Por fim, convidamos vocês a nos seguir nas redes sociais e conhecer o nosso endereço!';
                            $aviso5 =
                                'Nosso objetivo é servir o que há de melhor na gastronomia brasileira, com a intenção de que nossos clientes possam desfrutar de comida feita na hora!!!';
                            echo "<p class=\"text-left p-5 bg-orange-100 rounded-lg\">$aviso1 <br><br> $aviso2<br><br> $aviso3 <br><br> $aviso4 <br><br> $aviso5</p>";
                        @endphp
                    </section>
                </div>

                <div class="border-black border-2 border-solid w-2/2 mt-10"></div>
            </div>

            {{-- Categoria cardápios --}}
            <div id="cardapios">
                <div class="mt-10 flex items-center justify-center">
                    <section id="cardapios" class="menu-section">
                        <h2 class="mb-10 text-2xl text-white text-center">Cardápios do Restaurant Tagline</h2>

                        <div class="menu-category">
                            <h3>Comidas Deliciosas!</h3>
                            <div class="table-container">
                                <table class="menu-table">
                                    <thead>
                                        <tr>
                                            <th>Prato</th>
                                            <th>Preço</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Virada Paulista</td>
                                            <td>R$ 35,99</td>
                                        </tr>
                                        <tr>
                                            <td>Feijoada</td>
                                            <td>R$ 50,99</td>
                                        </tr>
                                        <tr>
                                            <td>Strogonoff</td>
                                            <td>R$ 24,99</td>
                                        </tr>
                                        <tr>
                                            <td>Calabresa</td>
                                            <td>R$ 22,99</td>
                                        </tr>
                                        <tr>
                                            <td>Filé de frango</td>
                                            <td>R$ 26,99</td>
                                        </tr>
                                        <tr>
                                            <td>Picadinho</td>
                                            <td>R$ 25,99</td>
                                        </tr>
                                        <tr>
                                            <td>Filé de Frango à parmegiana</td>
                                            <td>R$ 39,99</td>
                                        </tr>
                                        <tr>
                                            <td>Filé de frango à milanesa</td>
                                            <td>R$ 33,99</td>
                                        </tr>
                                        <tr>
                                            <td>Lasanha</td>
                                            <td>R$ 29,99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="menu-category">
                            <h3>Porções Deliciosas</h3>
                            <div class="table-container">
                                <table class="menu-table">
                                    <thead>
                                        <tr>
                                            <th>Porção</th>
                                            <th>Preço</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Porção de Salsicha empanada</td>
                                            <td>R$ 14,99</td>
                                        </tr>
                                        <tr>
                                            <td>Porção de Asinhas de frango crocante</td>
                                            <td>R$ 16,99</td>
                                        </tr>
                                        <tr>
                                            <td>Porção de Camarões empanados</td>
                                            <td>R$ 38,99</td>
                                        </tr>
                                        <tr>
                                            <td>Porção de Tentáculos de polvo frito</td>
                                            <td>R$ 48,99</td>
                                        </tr>
                                        <tr>
                                            <td>Porção de Bolinhos de queijo</td>
                                            <td>R$ 13,99</td>
                                        </tr>
                                        <tr>
                                            <td>Porção de Batata frita</td>
                                            <td>R$ 19,99</td>
                                        </tr>
                                        <tr>
                                            <td>Porção de Espetinho de Frango</td>
                                            <td>R$ 22,99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="menu-category">
                            <h3>Bebidas Deliciosas</h3>
                            <div class="table-container">
                                <table class="menu-table">
                                    <thead>
                                        <tr>
                                            <th>Bebida</th>
                                            <th>Preço</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Suco de Maçã</td>
                                            <td>R$ 11,99</td>
                                        </tr>
                                        <tr>
                                            <td>Suco de Maracujá</td>
                                            <td>R$ 11,99</td>
                                        </tr>
                                        <tr>
                                            <td>Suco de Laranja</td>
                                            <td>R$ 11,99</td>
                                        </tr>
                                        <tr>
                                            <td>Suco de Melancia</td>
                                            <td>R$ 11,99</td>
                                        </tr>
                                        <tr>
                                            <td>Suco de Banana</td>
                                            <td>R$ 11,99</td>
                                        </tr>
                                        <tr>
                                            <td>Suco de Tangerina</td>
                                            <td>R$ 11,99</td>
                                        </tr>
                                        <tr>
                                            <td>Suco de Melão</td>
                                            <td>R$ 11,99</td>
                                        </tr>
                                        <tr>
                                            <td>Suco de Manga</td>
                                            <td>R$ 11,99</td>
                                        </tr>
                                        <tr>
                                            <td>Suco de Goiaba</td>
                                            <td>R$ 11,99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="border-black border-2 border-solid w-2/2 mt-10"></div>

            {{-- Seção redes sociais --}}
            <div class="text-center" id="redes-sociais">
                <section class="text-center mt-10">
                    <a href="#" class="m-5 border-4"><button
                            class="bg-white p-6  rounded-2xl">Instagram</button></a>
                    <a href="#" class="m-5 border-4"><button
                            class="bg-white p-6 rounded-2xl">Facebook</button></a>
                    <a href="#" class="m-5 border"><button
                            class="bg-white p-6 rounded-2xl">TikTok</button></a>
                    <a href="#" class="m-5 border"><button
                            class="bg-white p-6 rounded-2xl">Questionario</button></a>
                </section>
            </div>

            <footer class="bg-[#232323] text-2xl p-10 rounded-xl text-white text-center mt-10">&copy; <?php echo date('Y'); ?> Restaurant Tagline</footer>
        </div>
</x-app-layout>
