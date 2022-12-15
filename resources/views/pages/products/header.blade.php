<div class="flex justify-between">
    <h4 class="text-3xl font-light">
        Product Inventory
    </h4>
    <button
        class="uppercase py-2 px-5 rounded-3xl border-2 text-white border-blue-500 bg-blue-500 hover:bg-white hover:text-blue-500 duration-300"
        data-toggle="modal" data-target="myModal" id="addProduct"><i class="fa-solid fa-plus"></i> &nbsp; Add
        Product </button>
    <div class="hidden fixed z-10 left-0 top-0 w-full h-full bg-[rgba(0,0,0,0.3)]" id="modal">
        <div role="document">
            <div class="bg-white mx-auto my-[15%] p-[20px] w-96 rounded-md">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="modal-header">
                        <h5 class="modal-title text-xs text-blue-500">Add new product</h5>
                    </div>
                    <div class="modal-body text-gray-600">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text"
                                    class="form-control border-0 my-5 p-3 w-full rounded-md font-bold text-2xl"
                                    name="name" id="name" placeholder="Name your product here" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-md-4">
                                <p>Material</p>
                                <input type="text"
                                    class="border-blue-300 border-2 rounded-sm p-1 px-2 text-sm w-full" name="material"
                                    id="material" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-md-4">
                                <p>Category</p>
                                <select name="category" id="category"
                                    class="border-blue-300 border-2 rounded-sm p-1 px-2 text-sm w-full"
                                    value="EARRINGS">
                                    <option value="EARRINGS">Earrings</option>
                                    <option value="BRACELET">Bracelets</option>
                                    <option value="NECKLACE">Necklaces</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-md-4">
                                <p>Price</p>
                                <input type="number"
                                    class="border-blue-300 border-2 rounded-sm p-1 px-2 text-sm w-full" name="price"
                                    id="price" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-md-4">
                                <p>Inventory</p>
                                <input type="number"
                                    class="border-blue-300 border-2 rounded-sm p-1 px-2 text-sm w-full" name="inventory"
                                    id="inventory" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="uppercase bg-blue-500 text-white rounded-full text-xs p-5 py-3"
                            type="submit">Save
                            Product</button>
                        <button
                            class="uppercase text-blue-500 rounded-full text-xs p-5 py-3 ml-2 hover:bg-blue-500 hover:text-white duration-300"
                            id="close" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const modal = document.getElementById('modal');
    $('#addProduct').click(function() {
        $('#modal').fadeIn(200)
    })

    $('#close').click(function() {
        $('#modal').fadeOut(200)
    })

    window.onclick = function(event) {
        if (event.target == modal) {
            $('#modal').fadeOut(200)
        }
    }
</script>
