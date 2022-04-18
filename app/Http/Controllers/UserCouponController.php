<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCouponRequest;
use App\Http\Resources\UserCouponResource;
use App\Models\UserCoupon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserCouponController extends Controller
{

    public function index(): AnonymousResourceCollection
    {
        $posts = UserCoupon::all();
        return UserCouponResource::collection($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(StoreUserCouponRequest $request): UserCouponResource
    {
        // 이미 해당 쿠폰이 존재 X
        // 댓글에 특정 단어가 들어갈것

        $user_coupon = UserCoupon::create($request->validated());
        return new UserCouponResource($user_coupon);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCoupon  $userCoupon
     * @return \Illuminate\Http\Response
     */
    public function show(UserCoupon $userCoupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCoupon  $userCoupon
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCoupon $userCoupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserCoupon  $userCoupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCoupon $userCoupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCoupon  $userCoupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCoupon $userCoupon)
    {
        //
    }
}
