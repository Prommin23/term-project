<x-app-layout>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-gray-900">รายการสินค้าแนะนำ</h3>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
 
            
            @foreach ($product as $item)  
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <img src="{{ url($item->image) }}" alt="" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                    
                </div>

                <div class="px-5 py-3">
                    
                    <div class="flex items-center justify-between mb-5"></div>
                        <h3 class="text-gray-900 uppercase">ชื่อสินค้า : {{ $item->name }}</h3>
                        <h3 class="text-gray-900 uppercase"> ยี่ห้อ : {{ $item->brand->brand_name}}</h3> <br>
                        <span class="mt-2 text-gray-900 font-semibold">ราคา : {{ $item->price }} บาท </span> <br><br> 
                    
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <input type="hidden" value="{{ $item->name }}" name="name">
                        <input type="hidden" value="{{ $item->description  }}" name="description ">
                        <input type="hidden" value="{{ $item->price }}" name="price">
                        <input type="hidden" value="{{ $item->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white text-sm bg-blue-700 rounded">Add To Cart</button>
                    </form>
                </div>
                
            </div>
            @endforeach 
        </div>
    </div>
</x-app-layout>