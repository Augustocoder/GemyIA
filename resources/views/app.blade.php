<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>GemyIA</title>
    @vite('resources/css/app.css')
</head>

<body>


    <section>

        <form action='/image' method="POST">
            @csrf
            <div class="flex h-screen flex-col items-center justify-center bg-white">
                <h1 class="font-bold text-4xl text-indigo-500 hover:text-pink-500 transition-colors duration-500">GemyIA
                </h1>
                <div class="z-20 bg-white md:w-[684px] mx-auto mt-7 flex w-[92%] items-center rounded-full border ">
                    <input type="url"
                        class="z-20 w-full bg-transparent rounded-full py-[14px] pl-4 outline-none hover:shadow-lg transition-all duration-500"
                        placeholder="Digite sua URL" id="url" name="url" required="" autocomplete="off">
                </div>
                <div class="mt-3 flex space-x-12">
                    <button type="submit"
                        class="bg-gradient-to-r from-violet-500 to-fuchsia-500 px-2 py-1 rounded text-white hover:transform hover:scale-110 hover:shadow-lg transition-all duration-500">
                        Desvende a Imagem
                    </button>

                </div>
                @if (session('mensagem'))
                    <div class="mt-3 flex flex-col items-center justify-center border-2rounded-2xl">
                        @if (session('url'))
                            <div class="mt-10">
                                <img class="drop-shadow-sm rounded-2xl" src="{{ session('url') }}" height="500" width="500" alt="">
                            </div>
                        @endif
                        <div class="font-serif w-1/2 text-justify  text-black ">
                            {{ session('mensagem') }}
                        </div>
                    </div>
            </div>
            @endif
        </form>

    </section>


</body>

</html>
