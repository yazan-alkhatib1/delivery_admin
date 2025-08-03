<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\DeliveryManDocument;

class UserDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $is_verified_delivery_man = false;
        if ($this->user_type == 'delivery_man') {
            $is_verified_delivery_man = DeliveryManDocument::verifyDeliveryManDocument($this->id);
        }
        return [
            'id'                => $this->id,
            'name'              => $this->name,
            'email'             => $this->email,
            'username'          => $this->username,
            'status'            => $this->status,
            'user_type'         => $this->user_type,
            'country_id'        => $this->country_id,
            'country_name'      => optional($this->country)->name,
            'city_id'           => $this->city_id,
            'city_name'         => optional($this->city)->name,
            'address'           => $this->address,
            'contact_number'    => $this->contact_number,
            'profile_image'     => getSingleMedia($this, 'profile_image', null),
            'login_type'        => $this->login_type,
            'latitude'          => $this->latitude,
            'longitude'         => $this->longitude,
            'uid'               => $this->uid,
            'player_id'         => $this->player_id,
            'fcm_token'         => $this->fcm_token,
            'last_notification_seen' => $this->last_notification_seen,
            'is_verified_delivery_man' => (int) $is_verified_delivery_man,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
            'deleted_at'        => $this->deleted_at,
            'user_bank_account' => $this->userBankAccount,
            'otp_verify_at'     => $this->otp_verify_at,
            'email_verified_at' => $this->email_verified_at,
            'document_verified_at' => $this->document_verified_at,
            'app_version'       => $this->app_version,
            'app_source'        => $this->app_source,
            'referral_code' => $this->referral_code,
            'partner_referral_code' => $this->partner_referral_code,
            'vehicle_id'  => $this->vehicle_id,
            'average_rating' => count($this->rating) > 0 ? (float) number_format(max($this->rating->avg('rating'),0), 2) : 0,
        ];
    }
}
