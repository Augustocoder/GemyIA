<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>GemyIA</title>
    <link rel="stylesheet" href="build/assets/app-tN_rTdP3.css">
    <script src="build/assets/app-D2jpX1vH.js" type="text/javascript"></script>
</head>

<body>


    <section>

        <form action='/image' method="POST">
            @csrf
            <div class="flex h-screen flex-col items-center justify-center bg-white">
                <h1 class="font-bold text-4xl text-indigo-500 hover:text-pink-500 transition-colors duration-500">GemyIA
                </h1>
                <div class="z-20 bg-white md:w-[684px] mx-auto mt-7 flex w-[92%] items-center rounded-full border">
                    <input type="url"
                        class="z-20 w-full bg-transparent rounded-full py-[14px] pl-4 outline-none hover:shadow-lg transition-all duration-500"
                        placeholder="Digite sua URL" id="url" name="url" required="" autocomplete="off">
                </div>
                @if (session('error'))
                    <p style="color:rgb(213, 8, 8);text-align:left">{{ session('error') }}</p>
                @endif
                <div class="mt-3 flex space-x-12">
                    <button type="submit"
                        class="bg-gradient-to-r from-violet-500 to-fuchsia-500 px-2 py-1 rounded text-white hover:transform hover:scale-110 hover:shadow-lg transition-all duration-500">Desvende
                        a Imagem</button>
                </div>
                @if (session('mensagem'))
                    <div class="mt-8 w-full md:w-[684px]  mx-auto bg-white rounded-xl shadow-lg p-6">
                        @if (session('url'))
                            <div class="mt-4 ">
                                <img class="rounded-xl" src="{{ session('url') }}" alt="Imagem" width="500"
                                    height="500">
                            </div>
                        @endif
                        <div class="mt-6 text-gray-800">
                            {{ session('mensagem') }}
                        </div>
                    </div>
                @endif
            </div>
        </form>


    </section>


</body>

</html>
