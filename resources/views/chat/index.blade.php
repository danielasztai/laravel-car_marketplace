<x-layout>
    <div class="w-screen h-[calc(100vh-17vh)] flex items-center justify-center">
        <div class="w-1/5 h-5/6 bg-orange-600"></div>
        <div class="w-1/2 h-5/6 bg-gray-900 relative">
            <form action="">
                @csrf
                <div class="absolute bottom-0 w-full flex">
                    <textarea name="message" id="message" cols="50" rows="2" class="w-full bg-gray-600 pl-2" placeholder="Type your message."></textarea>
                    <button type="submit" class="absolute right-2 top-1 bg-orange-600 p-2 rounded-lg text-white hover:bg-gray-900 hover:text-orange-600 font-semibold">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>