<?php

namespace App\Http\Livewire\Site;

use App\Models\User;
use Livewire\Component;
use App\Models\cartItem;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class CartItemComponent extends Component
{
    public $totals;
    public $message;

    public function placeOrder()
    {

        $user = auth()->user();
        $cartItems = $user->cartItems;

        $totalAmount = $cartItems->sum('total');
        // foreach ($cartItems as $cartItem) {
        //     $product = $cartItem->product;
        //     $totalAmount += $product->price * $cartItem->quantity;
        // }

        $total_waste_user = $user->total_waste - $totalAmount;

        if($total_waste_user > 0)
        {
            $user_connecte = User::where('id', $user->id)->firstOrFail();
            $user_connecte->total_waste = $user->total_waste - $totalAmount;
            $user_connecte->save();
            $order = $user->orders()->create([
                'total_waste' => $totalAmount,
                'user_id' => $user->id,
                'status' => 'pending',
            ]);

            foreach ($cartItems as $cartItem) {
                $product = $cartItem->product;
                $order->orderItems()->create([
                    'product_id' => $product->id,
                    'quantite' => $cartItem->quantite,
                    'prix' => $product->promo_prix,
                ]);
            }

            $user->cartItems()->delete();

            session()->flash('message', 'Product removed from cart successfully!');
            back();

        }else{
            session()->flash('messageN', 'votre Wast est insuffisant pour effectuer cette operation');
            back();
        }

    }


    public function removeFromCart($productId)
    {
        $user = auth()->user();

        $cartItem = $user->cartItems()->where('produit_id', $productId)->firstOrFail();
        $cartItem->delete();
        session()->flash('message', 'Product removed from cart successfully!');
        back();
    }
    public function render()
    {
        $user = Auth::user();

        $cartItems = cartItem::where('user_id', $user->id)->with('produit')->get();
        // dd($cartItems);

        foreach($cartItems as $cartItem)
        {
            $total = $cartItem->produit->promo_prix  * $cartItem->quantite;
            $cartItem->total = $total;
            $cartItem->save();
        }
        $this->totals = $cartItems->sum('total');
        return view('livewire.site.cart-item-component',[
            'cartItems' => $cartItems,
        ]);
    }
}
