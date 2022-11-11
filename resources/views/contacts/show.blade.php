<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            詳細画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font relative">

                        <div class="container px-5 py-10 mx-auto">
                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">

                                    <!-- 名前 -->
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                            <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $contact->name }}</div>
                                        </div>
                                    </div>

                                    <!-- 件名 -->
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                            <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $contact->title }}</div>
                                        </div>
                                    </div>

                                    <!-- メールアドレス -->
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                            <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $contact->email }}</div>
                                        </div>
                                    </div>

                                    <!-- URL -->
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="url" class="leading-7 text-sm text-gray-600">ホームページ</label>
                                            @if($contact->url)
                                            <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $contact->url }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- 性別 -->
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <div><label class="leading-7 text-sm text-gray-600">性別</label></div>
                                            <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $gender }}</div>
                                        </div>
                                    </div>

                                    <!-- 年齢 -->
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                            <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $age }}</div>
                                        </div>
                                    </div>

                                    <!-- 問い合わせ内容 -->
                                    <div class="p-2 w-full">
                                        <div class="relative">
                                            <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                                            <div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out break-words whitespace-pre-wrap">{{ $contact->contact }}</div>
                                        </div>
                                    </div>

                                    <!-- ボタン -->

                                    <div class="p-2 mt-4 w-full flex justify-around">
                                        <form action="{{ route('contacts.edit', ['id' => $contact->id]) }}" method="get">
                                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集する</button>
                                        </form>
                                        <form id="delete_{{ $contact->id }}" action="{{ route('contacts.destroy', ['id' => $contact->id]) }}" method="post">
                                            @csrf
                                            <a href="#" data-id="{{ $contact->id }}" onclick="deletePost(this)" class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">削除する</a>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deletePost(e) {
            if(confirm('本当に削除していいですか？')) {
                document.querySelector(`#delete_${e.dataset.id}`).submit()
            }
        }
    </script>
</x-app-layout>