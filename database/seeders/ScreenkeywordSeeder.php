<?php

namespace Database\Seeders;

use App\Models\DefaultKeyword;
use App\Models\LanguageList;
use App\Models\LanguageWithKeyword;
use Illuminate\Database\Seeder;
use App\Models\Screen;

class ScreenkeywordSeeder extends Seeder
{

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run()
  {
    $languageListIds = LanguageList::pluck('id')->toArray();

    $fetchedKeywords = LanguageWithKeyword::whereIn('language_id', $languageListIds)
        ->pluck('keyword_id')
        ->toArray();

        $screen_data =
        [
          [
            "screenID"=> "1",
            "ScreenName"=> "WalkThroughScreen",
            "keyword_data"=> [
              [
                "screenId"=> "1",
                "keyword_id"=> 1,
                "keyword_name"=> "skip",
                "keyword_value"=> "تخطي"
              ],
              [
                "screenId"=> "1",
                "keyword_id"=> 2,
                "keyword_name"=> "getStarted",
                "keyword_value"=> "ابدأ الآن"
              ],
              [
                "screenId"=> "1",
                "keyword_id"=> 3,
                "keyword_name"=> "walkThrough1Title",
                "keyword_value"=> "حدد موقع الاستلام"
              ],
              [
                "screenId"=> "1",
                "keyword_id"=> 4,
                "keyword_name"=> "walkThrough2Title",
                "keyword_value"=> "حدد موقع التسليم"
              ],
              [
                "screenId"=> "1",
                "keyword_id"=> 5,
                "keyword_name"=> "walkThrough3Title",
                "keyword_value"=> "تأكيد الطلب والاسترخاء"
              ],
              [
                "screenId"=> "1",
                "keyword_id"=> 6,
                "keyword_name"=> "walkThrough1Subtitle",
                "keyword_value"=> "يساعدنا هذا في الحصول على الطرد من عتبة منزلك.."
              ],
              [
                "screenId"=> "1",
                "keyword_id"=> 7,
                "keyword_name"=> "walkThrough2Subtitle",
                "keyword_value"=> "لنتمكن من تسليم الطرد للشخص الصحيح بسرعة."
              ],
              [
                "screenId"=> "1",
                "keyword_id"=> 8,
                "keyword_name"=> "walkThrough3Subtitle",
                "keyword_value"=> "سنقوم بتسليم طردك في الوقت المحدد وبحالة ممتازة."
              ]
            ]
          ],
          [
            "screenID"=> "2",
            "ScreenName"=> "SplashScreen",
            "keyword_data"=> [
              [
                "screenId"=> "2",
                "keyword_id"=> 9,
                "keyword_name"=> "appName",
                "keyword_value"=> "تكّة "
              ]
            ]
          ],
          [
            "screenID"=> "3",
            "ScreenName"=> "LoginScreen",
            "keyword_data"=> [
              [
                "screenId"=> "3",
                "keyword_id"=> 10,
                "keyword_name"=> "userNotApproveMsg",
                "keyword_value"=> "حسابك قيد المراجعة. انتظر بعض الوقت أو تواصل مع المسؤول."
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 11,
                "keyword_name"=> "acceptTermService",
                "keyword_value"=> "يرجى قبول شروط الخدمة وسياسة الخصوصية."
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 12,
                "keyword_name"=> "signIn",
                "keyword_value"=> "تسجيل الدخول"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 13,
                "keyword_name"=> "email",
                "keyword_value"=> "البريد الإلكتروني"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 14,
                "keyword_name"=> "password",
                "keyword_value"=> "كلمة المرور"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 15,
                "keyword_name"=> "rememberMe",
                "keyword_value"=> "تذكرني"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 16,
                "keyword_name"=> "forgotPasswordQue",
                "keyword_value"=> "نسيت كلمة المرور؟"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 17,
                "keyword_name"=> "iAgreeToThe",
                "keyword_value"=> "أوافق على"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 18,
                "keyword_name"=> "termOfService",
                "keyword_value"=> "شروط الخدمة"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 19,
                "keyword_name"=> "privacyPolicy",
                "keyword_value"=> "سياسة الخصوصية"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 20,
                "keyword_name"=> "demoUser",
                "keyword_value"=> "مستخدم تجريبي"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 21,
                "keyword_name"=> "demoDeliveryMan",
                "keyword_value"=> "مندوب توصيل تجريبي"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 22,
                "keyword_name"=> "doNotHaveAccount",
                "keyword_value"=> "ليس لديك حساب؟"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 23,
                "keyword_name"=> "signWith",
                "keyword_value"=> "أو سجل الدخول باستخدام"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 24,
                "keyword_name"=> "becomeADeliveryBoy",
                "keyword_value"=> "تريد أن تصبح مندوب توصيل؟"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 25,
                "keyword_name"=> "signUp",
                "keyword_value"=> "إنشاء حساب"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 26,
                "keyword_name"=> "lblUser",
                "keyword_value"=> "مستخدم"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 27,
                "keyword_name"=> "selectUserType",
                "keyword_value"=> "اختر نوع المستخدم"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 28,
                "keyword_name"=> "lblDeliveryBoy",
                "keyword_value"=> "مندوب توصيل"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 29,
                "keyword_name"=> "cancel",
                "keyword_value"=> "إلغاء"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 30,
                "keyword_name"=> "lblContinue",
                "keyword_value"=> "متابعة"
              ],
              [
                "screenId"=> "3",
                "keyword_id"=> 411,
                "keyword_name"=> "forKey",
                "keyword_value"=> "لـ"
              ]
            ]
          ],
          [
            "screenID"=> "4",
            "ScreenName"=> "ErrorMessages",
            "keyword_data"=> [
              [
                "screenId"=> "4",
                "keyword_id"=> 31,
                "keyword_name"=> "fieldRequiredMsg",
                "keyword_value"=> "هذا الحقل مطلوب"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 32,
                "keyword_name"=> "emailInvalid",
                "keyword_value"=> "البريد الإلكتروني غير صالح"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 33,
                "keyword_name"=> "passwordInvalid",
                "keyword_value"=> "يجب أن تتكون كلمة المرور من 6 أحرف على الأقل"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 74,
                "keyword_name"=> "errorInternetNotAvailable",
                "keyword_value"=> "لا يوجد اتصال بالإنترنت"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 57,
                "keyword_name"=> "errorSomethingWentWrong",
                "keyword_value"=> "حدث خطأ ما."
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 60,
                "keyword_name"=> "credentialNotMatch",
                "keyword_value"=> "بيانات الاعتماد هذه لا تطابق سجلاتنا."
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 279,
                "keyword_name"=> "verificationCompleted",
                "keyword_value"=> "تم التحقق بنجاح"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 280,
                "keyword_name"=> "phoneNumberInvalid",
                "keyword_value"=> "رقم الهاتف المقدم غير صالح."
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 281,
                "keyword_name"=> "codeSent",
                "keyword_value"=> "تم إرسال الرمز"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 282,
                "keyword_name"=> "internetIsConnected",
                "keyword_value"=> "تم الاتصال بالإنترنت."
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 283,
                "keyword_name"=> "userNotFound",
                "keyword_value"=> "المستخدم غير موجود"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 310,
                "keyword_name"=> "allowLocationPermission",
                "keyword_value"=> "السماح بصلاحية الموقع"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 352,
                "keyword_name"=> "invalidUrl",
                "keyword_value"=> "رابط غير صالح! يرجى إدخال رابط صحيح"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 355,
                "keyword_name"=> "signInFailed",
                "keyword_value"=> "فشل تسجيل الدخول:"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 356,
                "keyword_name"=> "appleSignInNotAvailableError",
                "keyword_value"=> "تسجيل الدخول عبر Apple غير متاح لجهازك"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 263,
                "keyword_name"=> "mapLoadingError",
                "keyword_value"=> "تعذر فتح الخريطة."
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 614,
                "keyword_name"=> "noDataFound",
                "keyword_value"=> "لا توجد بيانات"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 615,
                "keyword_name"=> "sessionExpired",
                "keyword_value"=> "انتهت الجلسة"
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 616,
                "keyword_name"=> "sessionExpiredMsg",
                "keyword_value"=> "انتهت جلستك. يرجى تسجيل الدخول مرة أخرى."
              ],
              [
                "screenId"=> "4",
                "keyword_id"=> 617,
                "keyword_name"=> "urlLaunchError",
                "keyword_value"=> "تعذر فتح الرابط"
              ]
            ]
          ],
          [
            "screenID"=> "5",
            "ScreenName"=> "RegisterScreen",
            "keyword_data"=> [
              [
                "screenId"=> "5",
                "keyword_id"=> 34,
                "keyword_name"=> "name",
                "keyword_value"=> "الاسم"
              ],
              [
                "screenId"=> "5",
                "keyword_id"=> 35,
                "keyword_name"=> "contactNumber",
                "keyword_value"=> "رقم الاتصال"
              ],
              [
                "screenId"=> "5",
                "keyword_id"=> 36,
                "keyword_name"=> "alreadyHaveAnAccount",
                "keyword_value"=> "لديك حساب بالفعل؟"
              ],
              [
                "screenId"=> "5",
                "keyword_id"=> 258,
                "keyword_name"=> "username",
                "keyword_value"=> "اسم المستخدم"
              ],
              [
                "screenId"=> "5",
                "keyword_id"=> 503,
                "keyword_name"=> "partnerCode",
                "keyword_value"=> "كود الإحالة"
              ]
            ]
          ],
          [
            "screenID"=> "6",
            "ScreenName"=> "ForgotPasswordScreen",
            "keyword_data"=> [
              [
                "screenId"=> "6",
                "keyword_id"=> 37,
                "keyword_name"=> "forgotPassword",
                "keyword_value"=> "نسيت كلمة المرور"
              ],
              [
                "screenId"=> "6",
                "keyword_id"=> 38,
                "keyword_name"=> "submit",
                "keyword_value"=> "إرسال"
              ],
              [
                "screenId"=> "6",
                "keyword_id"=> 39,
                "keyword_name"=> "demoMsg",
                "keyword_value"=> "لا يسمح لدور الاختبار بتنفيذ هذا الإجراء"
              ]
            ]
          ],
          [
            "screenID"=> "7",
            "ScreenName"=> "AboutUsScreen",
            "keyword_data"=> [
              [
                "screenId"=> "7",
                "keyword_id"=> 40,
                "keyword_name"=> "mAppDescription",
                "keyword_value"=> "يمكنك التسليم بالضبط عندما يريد المستخدم ويمكنك البدء في معالجة طلب المستخدم فور استلامه، أو يمكنك التسليم في يوم ووقت محددين."
              ],
              [
                "screenId"=> "7",
                "keyword_id"=> 41,
                "keyword_name"=> "contactUs",
                "keyword_value"=> "اتصل بنا"
              ],
              [
                "screenId"=> "7",
                "keyword_id"=> 42,
                "keyword_name"=> "aboutUs",
                "keyword_value"=> "من نحن"
              ],
              [
                "screenId"=> "7",
                "keyword_id"=> 354,
                "keyword_name"=> "copyRight",
                "keyword_value"=> "© 2024 MeetMighty IT Solutions"
              ]
            ]
          ],
          [
            "screenID"=> "8",
            "ScreenName"=> "BankDetailScreen",
            "keyword_data"=> [
              [
                "screenId"=> "8",
                "keyword_id"=> 43,
                "keyword_name"=> "bankDetails",
                "keyword_value"=> "تفاصيل البنك"
              ],
              [
                "screenId"=> "8",
                "keyword_id"=> 44,
                "keyword_name"=> "bankName",
                "keyword_value"=> "اسم البنك"
              ],
              [
                "screenId"=> "8",
                "keyword_id"=> 45,
                "keyword_name"=> "accountNumber",
                "keyword_value"=> "رقم الحساب"
              ],
              [
                "screenId"=> "8",
                "keyword_id"=> 46,
                "keyword_name"=> "nameAsPerBank",
                "keyword_value"=> "الاسم كما هو في البنك"
              ],
              [
                "screenId"=> "8",
                "keyword_id"=> 47,
                "keyword_name"=> "ifscCode",
                "keyword_value"=> "كود IFSC"
              ],
              [
                "screenId"=> "8",
                "keyword_id"=> 48,
                "keyword_name"=> "save",
                "keyword_value"=> "حفظ"
              ],
              [
                "screenId"=> "8",
                "keyword_id"=> 390,
                "keyword_name"=> "bankAddress",
                "keyword_value"=> "عنوان البنك"
              ],
              [
                "screenId"=> "8",
                "keyword_id"=> 391,
                "keyword_name"=> "routingNumber",
                "keyword_value"=> "رقم التوجيه"
              ],
              [
                "screenId"=> "8",
                "keyword_id"=> 392,
                "keyword_name"=> "bankIban",
                "keyword_value"=> "رقم IBAN"
              ],
              [
                "screenId"=> "8",
                "keyword_id"=> 393,
                "keyword_name"=> "bankSwift",
                "keyword_value"=> "كود SWIFT"
              ]
            ]
          ],
          [
            "screenID"=> "9",
            "ScreenName"=> "ChangePasswordScreen",
            "keyword_data"=> [
              [
                "screenId"=> "9",
                "keyword_id"=> 49,
                "keyword_name"=> "changePassword",
                "keyword_value"=> "تغيير كلمة المرور"
              ],
              [
                "screenId"=> "9",
                "keyword_id"=> 50,
                "keyword_name"=> "oldPassword",
                "keyword_value"=> "كلمة المرور الحالية"
              ],
              [
                "screenId"=> "9",
                "keyword_id"=> 51,
                "keyword_name"=> "newPassword",
                "keyword_value"=> "كلمة المرور الجديدة"
              ],
              [
                "screenId"=> "9",
                "keyword_id"=> 52,
                "keyword_name"=> "confirmPassword",
                "keyword_value"=> "تأكيد كلمة المرور"
              ],
              [
                "screenId"=> "9",
                "keyword_id"=> 53,
                "keyword_name"=> "passwordNotMatch",
                "keyword_value"=> "كلمة المرور غير متطابقة"
              ],
              [
                "screenId"=> "9",
                "keyword_id"=> 54,
                "keyword_name"=> "saveChanges",
                "keyword_value"=> "حفظ التغييرات"
              ]
            ]
          ],
          [
            "screenID"=> "10",
            "ScreenName"=> "EditProfileScreen",
            "keyword_data"=> [
              [
                "screenId"=> "10",
                "keyword_id"=> 55,
                "keyword_name"=> "editProfile",
                "keyword_value"=> "تعديل الملف الشخصي"
              ],
              [
                "screenId"=> "10",
                "keyword_id"=> 56,
                "keyword_name"=> "notChangeEmail",
                "keyword_value"=> "لا يمكنك تغيير البريد الإلكتروني"
              ],
              [
                "screenId"=> "10",
                "keyword_id"=> 58,
                "keyword_name"=> "notChangeMobileNo",
                "keyword_value"=> "لا يمكنك تغيير رقم الاتصال"
              ],
              [
                "screenId"=> "10",
                "keyword_id"=> 59,
                "keyword_name"=> "address",
                "keyword_value"=> "العنوان"
              ]
            ]
          ],
          [
            "screenID"=> "11",
            "ScreenName"=> "EmailVerificationScreen",
            "keyword_data"=> [
              [
                "screenId"=> "11",
                "keyword_id"=> 61,
                "keyword_name"=> "logoutConfirmationMsg",
                "keyword_value"=> "هل أنت متأكد أنك تريد تسجيل الخروج؟"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 62,
                "keyword_name"=> "yes",
                "keyword_value"=> "نعم"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 63,
                "keyword_name"=> "no",
                "keyword_value"=> "لا"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 64,
                "keyword_name"=> "emailVerification",
                "keyword_value"=> "تأكيد البريد الإلكتروني"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 65,
                "keyword_name"=> "weSend",
                "keyword_value"=> "سنرسل لك"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 66,
                "keyword_name"=> "oneTimePassword",
                "keyword_value"=> "كلمة مرور لمرة واحدة"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 67,
                "keyword_name"=> "on",
                "keyword_value"=> "على"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 68,
                "keyword_name"=> "getEmail",
                "keyword_value"=> "الحصول على البريد"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 69,
                "keyword_name"=> "confirmationCode",
                "keyword_value"=> "أدخل رمز التأكيد"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 70,
                "keyword_name"=> "confirmationCodeSent",
                "keyword_value"=> "أدخل رمز التأكيد المرسل إلى"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 71,
                "keyword_name"=> "didNotReceiveTheCode",
                "keyword_value"=> "لم تستلم الرمز؟"
              ],
              [
                "screenId"=> "11",
                "keyword_id"=> 72,
                "keyword_name"=> "resend",
                "keyword_value"=> "إعادة إرسال"
              ]
            ]
          ],
          [
            "screenID"=> "12",
            "ScreenName"=> "LanguageScreen",
            "keyword_data"=> [
              [
                "screenId"=> "12",
                "keyword_id"=> 73,
                "keyword_name"=> "language",
                "keyword_value"=> "اللغة"
              ]
            ]
          ],
          [
            "screenID"=> "13",
            "ScreenName"=> "NotificationScreen",
            "keyword_data"=> [
              [
                "screenId"=> "13",
                "keyword_id"=> 75,
                "keyword_name"=> "notifications",
                "keyword_value"=> "الإشعارات"
              ],
              [
                "screenId"=> "13",
                "keyword_id"=> 76,
                "keyword_name"=> "markAllRead",
                "keyword_value"=> "تعيين الكل كمقروء"
              ]
            ]
          ],
          [
            "screenID"=> "14",
            "ScreenName"=> "ThemeScreen",
            "keyword_data"=> [
              [
                "screenId"=> "14",
                "keyword_id"=> 77,
                "keyword_name"=> "light",
                "keyword_value"=> "فاتح"
              ],
              [
                "screenId"=> "14",
                "keyword_id"=> 78,
                "keyword_name"=> "dark",
                "keyword_value"=> "داكن"
              ],
              [
                "screenId"=> "14",
                "keyword_id"=> 79,
                "keyword_name"=> "systemDefault",
                "keyword_value"=> "النظام الافتراضي"
              ],
              [
                "screenId"=> "14",
                "keyword_id"=> 80,
                "keyword_name"=> "theme",
                "keyword_value"=> "المظهر"
              ]
            ]
          ],
          [
            "screenID"=> "15",
            "ScreenName"=> "UserCitySelectScreen",
            "keyword_data"=> [
              [
                "screenId"=> "15",
                "keyword_id"=> 81,
                "keyword_name"=> "pleaseSelectCity",
                "keyword_value"=> "الرجاء اختيار المدينة"
              ],
              [
                "screenId"=> "15",
                "keyword_id"=> 82,
                "keyword_name"=> "selectRegion",
                "keyword_value"=> "اختر المنطقة"
              ],
              [
                "screenId"=> "15",
                "keyword_id"=> 83,
                "keyword_name"=> "country",
                "keyword_value"=> "الدولة"
              ],
              [
                "screenId"=> "15",
                "keyword_id"=> 84,
                "keyword_name"=> "city",
                "keyword_value"=> "المدينة"
              ],
              [
                "screenId"=> "15",
                "keyword_id"=> 85,
                "keyword_name"=> "selectCity",
                "keyword_value"=> "اختر المدينة"
              ]
            ]
          ],
          [
            "screenID"=> "16",
            "ScreenName"=> "VerificationScreen",
            "keyword_data"=> [
              [
                "screenId"=> "16",
                "keyword_id"=> 86,
                "keyword_name"=> "verification",
                "keyword_value"=> "التحقق"
              ],
              [
                "screenId"=> "16",
                "keyword_id"=> 87,
                "keyword_name"=> "phoneNumberVerification",
                "keyword_value"=> "تحقق رقم الهاتف"
              ],
              [
                "screenId"=> "16",
                "keyword_id"=> 88,
                "keyword_name"=> "getOTP",
                "keyword_value"=> "الحصول على OTP"
              ],
              [
                "screenId"=> "16",
                "keyword_id"=> 89,
                "keyword_name"=> "invalidVerificationCode",
                "keyword_value"=> "رمز التحقق غير صالح"
              ]
            ]
          ],
          [
            "screenID"=> "17",
            "ScreenName"=> "ChatScreen",
            "keyword_data"=> [
              [
                "screenId"=> "17",
                "keyword_id"=> 90,
                "keyword_name"=> "deleteMessage",
                "keyword_value"=> "حذف الرسالة؟"
              ],
              [
                "screenId"=> "17",
                "keyword_id"=> 91,
                "keyword_name"=> "writeAMessage",
                "keyword_value"=> "اكتب رسالة..."
              ]
            ]
          ],
          [
            "screenID"=> "18",
            "ScreenName"=> "AddAddressScreen",
            "keyword_data"=> [
              [
                "screenId"=> "18",
                "keyword_id"=> 92,
                "keyword_name"=> "addNewAddress",
                "keyword_value"=> "إضافة عنوان جديد"
              ],
              [
                "screenId"=> "18",
                "keyword_id"=> 93,
                "keyword_name"=> "pleaseSelectValidAddress",
                "keyword_value"=> "الرجاء اختيار عنوان صالح"
              ]
            ]
          ],
          [
            "screenID"=> "19",
            "ScreenName"=> "CreateOrderScreen",
            "keyword_data"=> [
              [
                "screenId"=> "19",
                "keyword_id"=> 94,
                "keyword_name"=> "balanceInsufficient",
                "keyword_value"=> "الرصيد غير كافٍ، يرجى إضافة مبلغ إلى محفظتك"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 95,
                "keyword_name"=> "deliveryNow",
                "keyword_value"=> "تسليم الآن"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 96,
                "keyword_name"=> "schedule",
                "keyword_value"=> "جدولة"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 97,
                "keyword_name"=> "pickTime",
                "keyword_value"=> "اختر الوقت"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 98,
                "keyword_name"=> "date",
                "keyword_value"=> "التاريخ"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 99,
                "keyword_name"=> "from",
                "keyword_value"=> "من"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 100,
                "keyword_name"=> "endTimeValidationMsg",
                "keyword_value"=> "يجب أن يكون وقت الانتهاء بعد وقت البداية"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 101,
                "keyword_name"=> "to",
                "keyword_value"=> "إلى"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 102,
                "keyword_name"=> "deliverTime",
                "keyword_value"=> "وقت التسليم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 103,
                "keyword_name"=> "weight",
                "keyword_value"=> "الوزن"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 104,
                "keyword_name"=> "numberOfParcels",
                "keyword_value"=> "عدد الطرود"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 105,
                "keyword_name"=> "selectVehicle",
                "keyword_value"=> "اختر المركبة"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 106,
                "keyword_name"=> "parcelType",
                "keyword_value"=> "نوع الطرد"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 107,
                "keyword_name"=> "pickupInformation",
                "keyword_value"=> "معلومات الاستلام"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 108,
                "keyword_name"=> "selectAddressSave",
                "keyword_value"=> "اختر عنوانًا من المحفوظات"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 109,
                "keyword_name"=> "selectAddress",
                "keyword_value"=> "اختر العنوان"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 110,
                "keyword_name"=> "location",
                "keyword_value"=> "الموقع"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 111,
                "keyword_name"=> "description",
                "keyword_value"=> "الوصف"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 112,
                "keyword_name"=> "deliveryInformation",
                "keyword_value"=> "معلومات التسليم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 113,
                "keyword_name"=> "deliveryLocation",
                "keyword_value"=> "موقع التسليم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 114,
                "keyword_name"=> "deliveryContactNumber",
                "keyword_value"=> "رقم اتصال المستلم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 115,
                "keyword_name"=> "deliveryDescription",
                "keyword_value"=> "وصف التسليم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 116,
                "keyword_name"=> "packageInformation",
                "keyword_value"=> "معلومات الطرد"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 118,
                "keyword_name"=> "pickupLocation",
                "keyword_value"=> "موقع الاستلام"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 120,
                "keyword_name"=> "payment",
                "keyword_value"=> "الدفع"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 121,
                "keyword_name"=> "paymentCollectFrom",
                "keyword_value"=> "تحصيل الدفع من"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 122,
                "keyword_name"=> "saveDraftConfirmationMsg",
                "keyword_value"=> "هل أنت متأكد أنك تريد الحفظ كمسودة؟"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 123,
                "keyword_name"=> "saveDraft",
                "keyword_value"=> "حفظ كمسودة"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 124,
                "keyword_name"=> "createOrder",
                "keyword_value"=> "إنشاء طلب"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 125,
                "keyword_name"=> "previous",
                "keyword_value"=> "السابق"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 126,
                "keyword_name"=> "next",
                "keyword_value"=> "التالي"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 127,
                "keyword_name"=> "sourceLocation",
                "keyword_value"=> "الموقع المصدر"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 128,
                "keyword_name"=> "destinationLocation",
                "keyword_value"=> "موقع الوجهة"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 129,
                "keyword_name"=> "pickupCurrentValidationMsg",
                "keyword_value"=> "يجب أن يكون وقت الاستلام بعد الوقت الحالي"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 130,
                "keyword_name"=> "pickupDeliverValidationMsg",
                "keyword_value"=> "يجب أن يكون وقت الاستلام قبل وقت التسليم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 131,
                "keyword_name"=> "createOrderConfirmationMsg",
                "keyword_value"=> "هل أنت متأكد أنك تريد إنشاء الطلب؟"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 132,
                "keyword_name"=> "deliveryCharge",
                "keyword_value"=> "رسوم التسليم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 133,
                "keyword_name"=> "distanceCharge",
                "keyword_value"=> "رسوم المسافة"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 134,
                "keyword_name"=> "weightCharge",
                "keyword_value"=> "رسوم الوزن"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 135,
                "keyword_name"=> "extraCharges",
                "keyword_value"=> "رسوم إضافية"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 136,
                "keyword_name"=> "total",
                "keyword_value"=> "الإجمالي"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 137,
                "keyword_name"=> "choosePickupAddress",
                "keyword_value"=> "اختر عنوان الاستلام"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 138,
                "keyword_name"=> "chooseDeliveryAddress",
                "keyword_value"=> "اختر عنوان التسليم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 139,
                "keyword_name"=> "showingAllAddress",
                "keyword_value"=> "عرض جميع العناوين المتاحة"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 284,
                "keyword_name"=> "confirmation",
                "keyword_value"=> "تأكيد"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 285,
                "keyword_name"=> "create",
                "keyword_value"=> "إنشاء"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 302,
                "keyword_name"=> "cash",
                "keyword_value"=> "نقدي"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 303,
                "keyword_name"=> "online",
                "keyword_value"=> "عبر الإنترنت"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 340,
                "keyword_name"=> "balanceInsufficientCashPayment",
                "keyword_value"=> "الرصيد غير كافٍ، تم إنشاء الطلب مع الدفع نقدًا."
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 341,
                "keyword_name"=> "ok",
                "keyword_value"=> "موافق"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 367,
                "keyword_name"=> "orderItems",
                "keyword_value"=> "عناصر الطلب"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 368,
                "keyword_name"=> "productAmount",
                "keyword_value"=> "مبلغ المنتج"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 375,
                "keyword_name"=> "pleaseAvoidSendingProhibitedItems",
                "keyword_value"=> "ملاحظة: يرجى تجنب إرسال العناصر المحظورة."
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 434,
                "keyword_name"=> "insuranceCharge",
                "keyword_value"=> "رسوم التأمين"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 456,
                "keyword_name"=> "labels",
                "keyword_value"=> "تسميات"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 457,
                "keyword_name"=> "pickupPersonName",
                "keyword_value"=> "اسم شخص الاستلام"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 458,
                "keyword_name"=> "pickupInstructions",
                "keyword_value"=> "تعليمات الاستلام"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 459,
                "keyword_name"=> "deliveryPersonName",
                "keyword_value"=> "اسم شخص التسليم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 460,
                "keyword_name"=> "deliveryInstructions",
                "keyword_value"=> "تعليمات التسليم"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 461,
                "keyword_name"=> "insurance",
                "keyword_value"=> "تأمين"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 462,
                "keyword_name"=> "addCourierInsurance",
                "keyword_value"=> "إضافة تأمين الشحن"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 463,
                "keyword_name"=> "noThanksRisk",
                "keyword_value"=> "لا شكرًا، سأتحمل المخاطرة"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 505,
                "keyword_name"=> "approxParcelValue",
                "keyword_value"=> "أدخل القيمة التقريبية للطرد"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 506,
                "keyword_name"=> "reviewRoute",
                "keyword_value"=> "مراجعة المسار"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 507,
                "keyword_name"=> "pickupDescription",
                "keyword_value"=> "وصف الاستلام"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 508,
                "keyword_name"=> "viewMore",
                "keyword_value"=> "عرض المزيد"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 509,
                "keyword_name"=> "contactPersonName",
                "keyword_value"=> "اسم الشخص للاتصال"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 510,
                "keyword_name"=> "information",
                "keyword_value"=> "معلومات"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 511,
                "keyword_name"=> "instruction",
                "keyword_value"=> "تعليمات"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 516,
                "keyword_name"=> "insuranceAmountValidation",
                "keyword_value"=> "الرجاء إدخال مبلغ التأمين"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 542,
                "keyword_name"=> "timeValidation",
                "keyword_value"=> "يجب أن يكون الوقت بعد ساعة واحدة على الأقل من الوقت الحالي."
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 547,
                "keyword_name"=> "scheduleOrderTimeMsg",
                "keyword_value"=> "يجب أن يكون الوقت بعد ساعة واحدة على الأقل من الوقت الحالي."
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 558,
                "keyword_name"=> "capacity",
                "keyword_value"=> "السعة"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 559,
                "keyword_name"=> "perKmCharge=>",
                "keyword_value"=> "رسوم لكل كم=>"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 598,
                "keyword_name"=> "offersAndBenefits",
                "keyword_value"=> "العروض والمزايا"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 599,
                "keyword_name"=> "onThisOrder",
                "keyword_value"=> "على هذا الطلب"
              ],
              [
                "screenId"=> "19",
                "keyword_id"=> 600,
                "keyword_name"=> "moreCoupons",
                "keyword_value"=> "المزيد من القسائم"
              ]
            ]
          ],
          [
            "screenID"=> "20",
            "ScreenName"=> "DashboardScreen",
            "keyword_data"=> [
              [
                "screenId"=> "20",
                "keyword_id"=> 140,
                "keyword_name"=> "myOrders",
                "keyword_value"=> "طلباتي"
              ],
              [
                "screenId"=> "20",
                "keyword_id"=> 141,
                "keyword_name"=> "account",
                "keyword_value"=> "الحساب"
              ],
              [
                "screenId"=> "20",
                "keyword_id"=> 142,
                "keyword_name"=> "hey",
                "keyword_value"=> "مرحبًا"
              ],
              [
                "screenId"=> "20",
                "keyword_id"=> 286,
                "keyword_name"=> "filter",
                "keyword_value"=> "تصفية"
              ],
              [
                "screenId"=> "20",
                "keyword_id"=> 287,
                "keyword_name"=> "reset",
                "keyword_value"=> "إعادة تعيين"
              ],
              [
                "screenId"=> "20",
                "keyword_id"=> 288,
                "keyword_name"=> "status",
                "keyword_value"=> "الحالة"
              ],
              [
                "screenId"=> "20",
                "keyword_id"=> 289,
                "keyword_name"=> "mustSelectStartDate",
                "keyword_value"=> "يجب تحديد تاريخ البداية"
              ],
              [
                "screenId"=> "20",
                "keyword_id"=> 290,
                "keyword_name"=> "toDateValidationMsg",
                "keyword_value"=> "يجب أن يكون تاريخ الانتهاء بعد تاريخ البداية"
              ],
              [
                "screenId"=> "20",
                "keyword_id"=> 291,
                "keyword_name"=> "applyFilter",
                "keyword_value"=> "تطبيق التصفية"
              ],
              [
                "screenId"=> "20",
                "keyword_id"=> 376,
                "keyword_name"=> "whatCanWeGetYou",
                "keyword_value"=> "ماذا يمكننا أن نحضر لك؟"
              ]
            ]
          ],
          [
            "screenID"=> "21",
            "ScreenName"=> "AccountFragment",
            "keyword_data"=> [
              [
                "screenId"=> "21",
                "keyword_id"=> 143,
                "keyword_name"=> "ordersWalletMore",
                "keyword_value"=> "الطلبات، المحفظة والمزيد"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 144,
                "keyword_name"=> "drafts",
                "keyword_value"=> "المسودات"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 145,
                "keyword_name"=> "wallet",
                "keyword_value"=> "المحفظة"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 146,
                "keyword_name"=> "lblMyAddresses",
                "keyword_value"=> "عناويني"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 147,
                "keyword_name"=> "deleteAccount",
                "keyword_value"=> "حذف الحساب"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 148,
                "keyword_name"=> "general",
                "keyword_value"=> "عام"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 149,
                "keyword_name"=> "termAndCondition",
                "keyword_value"=> "الشروط والأحكام"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 150,
                "keyword_name"=> "helpAndSupport",
                "keyword_value"=> "المساعدة والدعم"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 151,
                "keyword_name"=> "logout",
                "keyword_value"=> "تسجيل الخروج"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 152,
                "keyword_name"=> "version",
                "keyword_value"=> "الإصدار"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 119,
                "keyword_name"=> "verifyDocument",
                "keyword_value"=> "تحقق من المستند"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 408,
                "keyword_name"=> "pages",
                "keyword_value"=> "الصفحات"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 517,
                "keyword_name"=> "vehicleHistory",
                "keyword_value"=> "سجل المركبة"
              ],
              [
                "screenId"=> "21",
                "keyword_id"=> 518,
                "keyword_name"=> "update",
                "keyword_value"=> "تحديث"
              ]
            ]
          ],
          [
            "screenID"=> "22",
            "ScreenName"=> "DeleteAccountScreen",
            "keyword_data"=> [
              [
                "screenId"=> "22",
                "keyword_id"=> 153,
                "keyword_name"=> "confirmAccountDeletion",
                "keyword_value"=> "تأكيد حذف الحساب"
              ],
              [
                "screenId"=> "22",
                "keyword_id"=> 154,
                "keyword_name"=> "deleteAccountMsg2",
                "keyword_value"=> "حذف حسابك يزيل المعلومات الشخصية من قاعدة بياناتنا. يصبح بريدك الإلكتروني محجوزًا بشكل دائم ولا يمكن إعادة استخدام نفس البريد الإلكتروني لتسجيل حساب جديد."
              ],
              [
                "screenId"=> "22",
                "keyword_id"=> 155,
                "keyword_name"=> "deleteAccountConfirmMsg",
                "keyword_value"=> "هل أنت متأكد أنك تريد حذف الحساب؟"
              ]
            ]
          ],
          [
            "screenID"=> "23",
            "ScreenName"=> "DraftOrderListScreen",
            "keyword_data"=> [
              [
                "screenId"=> "23",
                "keyword_id"=> 156,
                "keyword_name"=> "draftOrder",
                "keyword_value"=> "طلب مسودة"
              ],
              [
                "screenId"=> "23",
                "keyword_id"=> 157,
                "keyword_name"=> "delete",
                "keyword_value"=> "حذف"
              ],
              [
                "screenId"=> "23",
                "keyword_id"=> 158,
                "keyword_name"=> "deleteDraft",
                "keyword_value"=> "حذف طلب المسودة؟"
              ],
              [
                "screenId"=> "23",
                "keyword_id"=> 159,
                "keyword_name"=> "sureWantToDeleteDraft",
                "keyword_value"=> "هل أنت متأكد أنك تريد حذف طلب المسودة هذا؟"
              ]
            ]
          ],
          [
            "screenID"=> "24",
            "ScreenName"=> "GoogleMapScreen",
            "keyword_data"=> [
              [
                "screenId"=> "24",
                "keyword_id"=> 160,
                "keyword_name"=> "selectLocation",
                "keyword_value"=> "اختر الموقع"
              ],
              [
                "screenId"=> "24",
                "keyword_id"=> 161,
                "keyword_name"=> "selectPickupLocation",
                "keyword_value"=> "اختر موقع الاستلام"
              ],
              [
                "screenId"=> "24",
                "keyword_id"=> 162,
                "keyword_name"=> "selectDeliveryLocation",
                "keyword_value"=> "اختر موقع التسليم"
              ],
              [
                "screenId"=> "24",
                "keyword_id"=> 163,
                "keyword_name"=> "searchAddress",
                "keyword_value"=> "بحث عن عنوان"
              ],
              [
                "screenId"=> "24",
                "keyword_id"=> 164,
                "keyword_name"=> "pleaseWait",
                "keyword_value"=> "يرجى الانتظار..."
              ],
              [
                "screenId"=> "24",
                "keyword_id"=> 165,
                "keyword_name"=> "confirmPickupLocation",
                "keyword_value"=> "تأكيد موقع الاستلام"
              ],
              [
                "screenId"=> "24",
                "keyword_id"=> 166,
                "keyword_name"=> "confirmDeliveryLocation",
                "keyword_value"=> "تأكيد موقع التسليم"
              ],
              [
                "screenId"=> "24",
                "keyword_id"=> 167,
                "keyword_name"=> "addressNotInArea",
                "keyword_value"=> "العنوان غير متاح في المنطقة"
              ]
            ]
          ],
          [
            "screenID"=> "25",
            "ScreenName"=> "MyAddressListScreen",
            "keyword_data"=> [
              [
                "screenId"=> "25",
                "keyword_id"=> 168,
                "keyword_name"=> "deleteLocation",
                "keyword_value"=> "حذف الموقع؟"
              ],
              [
                "screenId"=> "25",
                "keyword_id"=> 169,
                "keyword_name"=> "sureWantToDeleteAddress",
                "keyword_value"=> "هل أنت متأكد أنك تريد حذف هذا العنوان؟"
              ],
              [
                "screenId"=> "25",
                "keyword_id"=> 464,
                "keyword_name"=> "addressType",
                "keyword_value"=> "نوع العنوان"
              ]
            ]
          ],
          [
            "screenID"=> "27",
            "ScreenName"=> "OrderDetailScreen",
            "keyword_data"=> [
              [
                "screenId"=> "27",
                "keyword_id"=> 170,
                "keyword_name"=> "at",
                "keyword_value"=> "في"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 171,
                "keyword_name"=> "distance",
                "keyword_value"=> "المسافة"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 172,
                "keyword_name"=> "duration",
                "keyword_value"=> "المدة"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 173,
                "keyword_name"=> "picked",
                "keyword_value"=> "تم الاستلام"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 174,
                "keyword_name"=> "note",
                "keyword_value"=> "ملاحظة:"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 175,
                "keyword_name"=> "courierWillPickupAt",
                "keyword_value"=> "سوف يستلم المندوب الطرد في"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 176,
                "keyword_name"=> "delivered",
                "keyword_value"=> "تم التسليم"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 177,
                "keyword_name"=> "courierWillDeliverAt",
                "keyword_value"=> "سوف يسلم المندوب الطرد في"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 178,
                "keyword_name"=> "viewHistory",
                "keyword_value"=> "عرض السجل"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 179,
                "keyword_name"=> "parcelDetails",
                "keyword_value"=> "تفاصيل الطرد"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 180,
                "keyword_name"=> "paymentDetails",
                "keyword_value"=> "تفاصيل الدفع"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 181,
                "keyword_name"=> "paymentType",
                "keyword_value"=> "نوع الدفع"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 182,
                "keyword_name"=> "paymentStatus",
                "keyword_value"=> "حالة الدفع"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 183,
                "keyword_name"=> "vehicle",
                "keyword_value"=> "المركبة"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 184,
                "keyword_name"=> "vehicleName",
                "keyword_value"=> "اسم المركبة"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 185,
                "keyword_name"=> "aboutDeliveryMan",
                "keyword_value"=> "حول مندوب التوصيل"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 186,
                "keyword_name"=> "aboutUser",
                "keyword_value"=> "حول المستخدم"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 187,
                "keyword_name"=> "returnReason",
                "keyword_value"=> "سبب الإرجاع"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 188,
                "keyword_name"=> "cancelledReason",
                "keyword_value"=> "سبب الإلغاء"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 189,
                "keyword_name"=> "cancelBeforePickMsg",
                "keyword_value"=> "تم إلغاء الطلب قبل استلام الطرد. لذلك، يتم خصم رسوم الإلغاء فقط. إذا كان الدفع قد تم بالفعل، فسيتم استرداد المبلغ إلى المحفظة."
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 190,
                "keyword_name"=> "cancelAfterPickMsg",
                "keyword_value"=> "تم إلغاء الطلب بعد استلام الطرد. لذلك، يتم خصم الرسوم بالكامل."
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 191,
                "keyword_name"=> "cancelOrder",
                "keyword_value"=> "إلغاء الطلب"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 192,
                "keyword_name"=> "cancelNote",
                "keyword_value"=> "ملاحظة: إذا قمت بإلغاء الطلب قبل استلام الطرد، فسيتم خصم رسوم الإلغاء. وإلا، سيتم خصم الرسوم بالكامل."
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 193,
                "keyword_name"=> "returnOrder",
                "keyword_value"=> "إرجاع الطلب"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 317,
                "keyword_name"=> "onPickup",
                "keyword_value"=> "عند الاستلام"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 318,
                "keyword_name"=> "onDelivery",
                "keyword_value"=> "عند التسليم"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 319,
                "keyword_name"=> "stripe",
                "keyword_value"=> "Stripe"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 320,
                "keyword_name"=> "razorpay",
                "keyword_value"=> "Razorpay"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 321,
                "keyword_name"=> "payStack",
                "keyword_value"=> "PayStack"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 322,
                "keyword_name"=> "flutterWave",
                "keyword_value"=> "FlutterWave"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 323,
                "keyword_name"=> "paypal",
                "keyword_value"=> "PayPal"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 324,
                "keyword_name"=> "payTabs",
                "keyword_value"=> "PayTabs"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 325,
                "keyword_name"=> "mercadoPago",
                "keyword_value"=> "Mercado pago"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 326,
                "keyword_name"=> "paytm",
                "keyword_value"=> "Paytm"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 327,
                "keyword_name"=> "myFatoorah",
                "keyword_value"=> "My Fatoorah"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 372,
                "keyword_name"=> "rateStore",
                "keyword_value"=> "تقييم المتجر"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 373,
                "keyword_name"=> "rateToStore",
                "keyword_value"=> "تقييم المتجر:"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 374,
                "keyword_name"=> "yourRatingToStore",
                "keyword_value"=> "تقييمك للمتجر:"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 406,
                "keyword_name"=> "addReview",
                "keyword_value"=> "إضافة تقييم"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 407,
                "keyword_name"=> "yourExperience",
                "keyword_value"=> "كيف كانت تجربة التوصيل معنا؟"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 448,
                "keyword_name"=> "invalidPickupAddress",
                "keyword_value"=> "عنوان استلام غير صالح"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 449,
                "keyword_name"=> "refusedBySender",
                "keyword_value"=> "رفض من قبل المرسل"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 450,
                "keyword_name"=> "invalidDeliveryAddress",
                "keyword_value"=> "عنوان تسليم غير صالح"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 451,
                "keyword_name"=> "exception",
                "keyword_value"=> "استثناء"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 452,
                "keyword_name"=> "refusedByRecipient",
                "keyword_value"=> "رفض من قبل المستلم"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 465,
                "keyword_name"=> "shippedVia",
                "keyword_value"=> "شحن عبر"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 466,
                "keyword_name"=> "pleaseSelectReason",
                "keyword_value"=> "الرجاء اختيار السبب"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 467,
                "keyword_name"=> "cancelAndReturn",
                "keyword_value"=> "إلغاء وإرجاع"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 549,
                "keyword_name"=> "canOrderWithinHour",
                "keyword_value"=> "يمكنك إلغاء طلبك قبل: "
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 560,
                "keyword_name"=> "enterProofDetails",
                "keyword_value"=> "أدخل تفاصيل الإثبات"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 566,
                "keyword_name"=> "rescheduleMsg",
                "keyword_value"=> "تم إعادة جدولة طلبك في"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 642,
                "keyword_name"=> "noReviewMsg",
                "keyword_value"=> "لا توجد تقييمات بعد"
              ],
              [
                "screenId"=> "27",
                "keyword_id"=> 643,
                "keyword_name"=> "rating",
                "keyword_value"=> "التقييم"
              ]
            ]
          ],
          [
            "screenID"=> "26",
            "ScreenName"=> "OrderHistoryScreen",
            "keyword_data"=> [
              [
                "screenId"=> "26",
                "keyword_id"=> 194,
                "keyword_name"=> "orderHistory",
                "keyword_value"=> "سجل الطلبات"
              ],
              [
                "screenId"=> "26",
                "keyword_id"=> 195,
                "keyword_name"=> "yourOrder",
                "keyword_value"=> "طلبك"
              ],
              [
                "screenId"=> "26",
                "keyword_id"=> 196,
                "keyword_name"=> "hasBeenAssignedTo",
                "keyword_value"=> "تم تعيينه لـ"
              ],
              [
                "screenId"=> "26",
                "keyword_id"=> 197,
                "keyword_name"=> "hasBeenTransferedTo",
                "keyword_value"=> "تم تحويله إلى"
              ],
              [
                "screenId"=> "26",
                "keyword_id"=> 198,
                "keyword_name"=> "newOrderHasBeenCreated",
                "keyword_value"=> "تم إنشاء طلب جديد."
              ],
              [
                "screenId"=> "26",
                "keyword_id"=> 199,
                "keyword_name"=> "deliveryPersonArrivedMsg",
                "keyword_value"=> "وصل مندوب التوصيل إلى موقع الاستلام وينتظر العميل."
              ],
              [
                "screenId"=> "26",
                "keyword_id"=> 200,
                "keyword_name"=> "deliveryPersonPickedUpCourierMsg",
                "keyword_value"=> "استلم مندوب التوصيل الطرد من موقع الاستلام."
              ],
              [
                "screenId"=> "26",
                "keyword_id"=> 201,
                "keyword_name"=> "hasBeenOutForDelivery",
                "keyword_value"=> "تم إرساله للتوصيل."
              ],
              [
                "screenId"=> "26",
                "keyword_id"=> 202,
                "keyword_name"=> "paymentStatusPaisMsg",
                "keyword_value"=> "حالة الدفع مدفوعة."
              ],
              [
                "screenId"=> "26",
                "keyword_id"=> 203,
                "keyword_name"=> "deliveredMsg",
                "keyword_value"=> "تم تسليمه بنجاح."
              ]
            ]
          ],
          [
            "screenID"=> "28",
            "ScreenName"=> "OrderTrackingScreen",
            "keyword_data"=> [
              [
                "screenId"=> "28",
                "keyword_id"=> 204,
                "keyword_name"=> "lastUpdatedAt",
                "keyword_value"=> "آخر تحديث في"
              ],
              [
                "screenId"=> "28",
                "keyword_id"=> 205,
                "keyword_name"=> "trackOrder",
                "keyword_value"=> "تتبع الطلب"
              ],
              [
                "screenId"=> "28",
                "keyword_id"=> 304,
                "keyword_name"=> "track",
                "keyword_value"=> "تتبع"
              ]
            ]
          ],
          [
            "screenID"=> "29",
            "ScreenName"=> "PaymentScreen",
            "keyword_data"=> [
              [
                "screenId"=> "29",
                "keyword_id"=> 206,
                "keyword_name"=> "transactionFailed",
                "keyword_value"=> "فشلت المعاملة!! حاول مرة أخرى."
              ],
              [
                "screenId"=> "29",
                "keyword_id"=> 207,
                "keyword_name"=> "success",
                "keyword_value"=> "نجاح"
              ],
              [
                "screenId"=> "29",
                "keyword_id"=> 208,
                "keyword_name"=> "failed",
                "keyword_value"=> "فشل"
              ],
              [
                "screenId"=> "29",
                "keyword_id"=> 209,
                "keyword_name"=> "paymentMethod",
                "keyword_value"=> "طرق الدفع"
              ],
              [
                "screenId"=> "29",
                "keyword_id"=> 210,
                "keyword_name"=> "payNow",
                "keyword_value"=> "ادفع الآن"
              ]
            ]
          ],
          [
            "screenID"=> "30",
            "ScreenName"=> "ReturnOrderScreen",
            "keyword_data"=> [
              [
                "screenId"=> "30",
                "keyword_id"=> 211,
                "keyword_name"=> "other",
                "keyword_value"=> "أخرى"
              ],
              [
                "screenId"=> "30",
                "keyword_id"=> 212,
                "keyword_name"=> "reason",
                "keyword_value"=> "السبب"
              ],
              [
                "screenId"=> "30",
                "keyword_id"=> 213,
                "keyword_name"=> "writeReasonHere",
                "keyword_value"=> "اكتب السبب هنا..."
              ],
              [
                "screenId"=> "30",
                "keyword_id"=> 214,
                "keyword_name"=> "lblReturn",
                "keyword_value"=> "إرجاع"
              ],
              [
                "screenId"=> "30",
                "keyword_id"=> 476,
                "keyword_name"=> "process",
                "keyword_value"=> "معالجة"
              ]
            ]
          ],
          [
            "screenID"=> "31",
            "ScreenName"=> "UserDetailsScreen",
            "keyword_data"=> [
              [
                "screenId"=> "31",
                "keyword_id"=> 215,
                "keyword_name"=> "profile",
                "keyword_value"=> "الملف الشخصي"
              ],
              [
                "screenId"=> "31",
                "keyword_id"=> 216,
                "keyword_name"=> "earningHistory",
                "keyword_value"=> "سجل الأرباح"
              ],
              [
                "screenId"=> "31",
                "keyword_id"=> 217,
                "keyword_name"=> "availableBalance",
                "keyword_value"=> "الرصيد المتاح"
              ],
              [
                "screenId"=> "31",
                "keyword_id"=> 218,
                "keyword_name"=> "manualRecieved",
                "keyword_value"=> "المستلم يدويًا"
              ],
              [
                "screenId"=> "31",
                "keyword_id"=> 219,
                "keyword_name"=> "totalWithdrawn",
                "keyword_value"=> "إجمالي المبلغ المسحوب"
              ],
              [
                "screenId"=> "31",
                "keyword_id"=> 220,
                "keyword_name"=> "lastLocation",
                "keyword_value"=> "آخر موقع"
              ],
              [
                "screenId"=> "31",
                "keyword_id"=> 221,
                "keyword_name"=> "latitude",
                "keyword_value"=> "خط العرض"
              ],
              [
                "screenId"=> "31",
                "keyword_id"=> 222,
                "keyword_name"=> "longitude",
                "keyword_value"=> "خط الطول"
              ]
            ]
          ],
          [
            "screenID"=> "32",
            "ScreenName"=> "WalletScreen",
            "keyword_data"=> [
              [
                "screenId"=> "32",
                "keyword_id"=> 223,
                "keyword_name"=> "walletHistory",
                "keyword_value"=> "سجل المحفظة"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 224,
                "keyword_name"=> "addMoney",
                "keyword_value"=> "إضافة أموال"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 225,
                "keyword_name"=> "amount",
                "keyword_value"=> "المبلغ"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 226,
                "keyword_name"=> "add",
                "keyword_value"=> "إضافة"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 227,
                "keyword_name"=> "addAmount",
                "keyword_value"=> "حقل المبلغ فارغ. يرجى إضافة مبلغ"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 228,
                "keyword_name"=> "withdraw",
                "keyword_value"=> "سحب"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 405,
                "keyword_name"=> "request",
                "keyword_value"=> "طلب"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 229,
                "keyword_name"=> "bankNotFound",
                "keyword_value"=> "عفواً، تفاصيل البنك غير موجودة"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 342,
                "keyword_name"=> "orderFee",
                "keyword_value"=> "رسوم الطلب"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 343,
                "keyword_name"=> "topup",
                "keyword_value"=> "شحن"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 344,
                "keyword_name"=> "orderCancelCharge",
                "keyword_value"=> "رسوم إلغاء الطلب"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 345,
                "keyword_name"=> "orderCancelRefund",
                "keyword_value"=> "استرداد إلغاء الطلب"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 346,
                "keyword_name"=> "correction",
                "keyword_value"=> "تصحيح"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 347,
                "keyword_name"=> "commission",
                "keyword_value"=> "إجمالي الأرباح"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 477,
                "keyword_name"=> "copy",
                "keyword_value"=> "نسخ"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 478,
                "keyword_name"=> "copiedToClipboard",
                "keyword_value"=> "تم النسخ إلى الحافظة"
              ],
              [
                "screenId"=> "32",
                "keyword_id"=> 641,
                "keyword_name"=> "addWalletBalanceDialogValidation",
                "keyword_value"=> "غير مسموح لك بإضافة أموال إلى المحفظة، يرجى التواصل مع الإدارة لمزيد من التفاصيل"
              ]
            ]
          ],
          [
            "screenID"=> "33",
            "ScreenName"=> "DeliveryDashbord",
            "keyword_data"=> [
              [
                "screenId"=> "33",
                "keyword_id"=> 230,
                "keyword_name"=> "order",
                "keyword_value"=> "طلب"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 231,
                "keyword_name"=> "orderCancelConfirmation",
                "keyword_value"=> "هل أنت متأكد أنك تريد إلغاء هذا الطلب؟"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 232,
                "keyword_name"=> "notifyUser",
                "keyword_value"=> "إعلام المستخدم"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 233,
                "keyword_name"=> "areYouSureWantToArrive",
                "keyword_value"=> "هل أنت متأكد أنك تريد الوصول؟"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 234,
                "keyword_name"=> "orderArrived",
                "keyword_value"=> "وصل الطلب"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 235,
                "keyword_name"=> "orderActiveSuccessfully",
                "keyword_value"=> "تهانينا!! تم تفعيل الطلب بنجاح."
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 236,
                "keyword_name"=> "orderDepartedSuccessfully",
                "keyword_value"=> "تهانينا!! تم إرسال الطلب بنجاح."
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 237,
                "keyword_name"=> "accept",
                "keyword_value"=> "قبول"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 238,
                "keyword_name"=> "pickUp",
                "keyword_value"=> "استلام"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 239,
                "keyword_name"=> "departed",
                "keyword_value"=> "تم الإرسال"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 240,
                "keyword_name"=> "confirmDelivery",
                "keyword_value"=> "تأكيد التسليم"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 311,
                "keyword_name"=> "orderPickupConfirmation",
                "keyword_value"=> "هل أنت متأكد أنك تريد استلام هذا الطلب؟"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 312,
                "keyword_name"=> "orderDepartedConfirmation",
                "keyword_value"=> "هل أنت متأكد أنك تريد إرسال هذا الطلب؟"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 313,
                "keyword_name"=> "orderCreateConfirmation",
                "keyword_value"=> "هل أنت متأكد أنك تريد إنشاء هذا الطلب؟"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 314,
                "keyword_name"=> "orderCompleteConfirmation",
                "keyword_value"=> "هل أنت متأكد أنك تريد إكمال هذا الطلب؟"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 348,
                "keyword_name"=> "assigned",
                "keyword_value"=> "مُعيّن"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 349,
                "keyword_name"=> "draft",
                "keyword_value"=> "مسودة"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 350,
                "keyword_name"=> "created",
                "keyword_value"=> "تم الإنشاء"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 351,
                "keyword_name"=> "accepted",
                "keyword_value"=> "مقبول"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 353,
                "keyword_name"=> "orderAssignConfirmation",
                "keyword_value"=> "هل أنت متأكد أنك تريد قبول هذا الطلب؟"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 410,
                "keyword_name"=> "reject",
                "keyword_value"=> "رفض"
              ],
              [
                "screenId"=> "33",
                "keyword_id"=> 504,
                "keyword_name"=> "shipped",
                "keyword_value"=> "تم الشحن"
              ]
            ]
          ],
          [
            "screenID"=> "34",
            "ScreenName"=> "EarningHistoryScreen",
            "keyword_data"=> [
              [
                "screenId"=> "34",
                "keyword_id"=> 241,
                "keyword_name"=> "earning",
                "keyword_value"=> "أرباح"
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 242,
                "keyword_name"=> "adminCommission",
                "keyword_value"=> "عمولة المشرف"
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 243,
                "keyword_name"=> "orderId",
                "keyword_value"=> "معرف الطلب"
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 306,
                "keyword_name"=> "pickedUp",
                "keyword_value"=> "تم الاستلام"
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 307,
                "keyword_name"=> "arrived",
                "keyword_value"=> "وصل"
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 308,
                "keyword_name"=> "completed",
                "keyword_value"=> "مكتمل"
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 309,
                "keyword_name"=> "cancelled",
                "keyword_value"=> "ملغى"
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 562,
                "keyword_name"=> "earlyDeliveryMsg",
                "keyword_value"=> "عذرًا! لا يمكنك تسليم هذا الطلب الآن. وقت استلام الطلب المجدول لا يتطابق مع الوقت الحالي."
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 563,
                "keyword_name"=> "earlyPickupMsg",
                "keyword_value"=> "عذرًا! لا يمكنك استلام هذا الطلب الآن. وقت استلام الطلب المجدول لا يتطابق مع الوقت الحالي."
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 564,
                "keyword_name"=> "reschedule",
                "keyword_value"=> "إعادة جدولة"
              ],
              [
                "screenId"=> "34",
                "keyword_id"=> 565,
                "keyword_name"=> "rescheduleTitle",
                "keyword_value"=> "املأ التفاصيل لإعادة الجدولة"
              ]
            ]
          ],
          [
            "screenID"=> "35",
            "ScreenName"=> "ReceivedScreenOrderScreen",
            "keyword_data"=> [
              [
                "screenId"=> "35",
                "keyword_id"=> 244,
                "keyword_name"=> "orderDeliveredSuccessfully",
                "keyword_value"=> "تهانينا!! تم تسليم الطلب بنجاح."
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 245,
                "keyword_name"=> "orderPickupSuccessfully",
                "keyword_value"=> "تهانينا!! تم استلام الطلب بنجاح."
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 246,
                "keyword_name"=> "imagePickToCamera",
                "keyword_value"=> "التقاط صورة بالكاميرا"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 247,
                "keyword_name"=> "imagePicToGallery",
                "keyword_value"=> "اختيار صورة من المعرض"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 248,
                "keyword_name"=> "orderDeliver",
                "keyword_value"=> "تسليم الطلب"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 249,
                "keyword_name"=> "orderPickup",
                "keyword_value"=> "استلام الطلب"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 250,
                "keyword_name"=> "info",
                "keyword_value"=> "معلومات"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 251,
                "keyword_name"=> "paymentCollectFromDelivery",
                "keyword_value"=> "تحصيل الدفع عند تسليم الطلب."
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 252,
                "keyword_name"=> "paymentCollectFromPickup",
                "keyword_value"=> "تحصيل الدفع عند استلام الطلب."
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 253,
                "keyword_name"=> "pickupDatetime",
                "keyword_value"=> "الاستلام في"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 254,
                "keyword_name"=> "deliveryDatetime",
                "keyword_value"=> "تاريخ التسليم"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 255,
                "keyword_name"=> "userSignature",
                "keyword_value"=> "توقيع المستخدم"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 256,
                "keyword_name"=> "clear",
                "keyword_value"=> "مسح"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 257,
                "keyword_name"=> "deliveryTimeSignature",
                "keyword_value"=> "توقيع وقت التسليم"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 259,
                "keyword_name"=> "confirmPickup",
                "keyword_value"=> "تأكيد الاستلام"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 260,
                "keyword_name"=> "pleaseConfirmPayment",
                "keyword_value"=> "يرجى تأكيد الدفع"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 261,
                "keyword_name"=> "selectDeliveryTimeMsg",
                "keyword_value"=> "الرجاء اختيار وقت التسليم"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 262,
                "keyword_name"=> "otpVerification",
                "keyword_value"=> "التحقق بكلمة مرور لمرة واحدة"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 264,
                "keyword_name"=> "enterTheCodeSendTo",
                "keyword_value"=> "أدخل الرمز المرسل إلى"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 305,
                "keyword_name"=> "orderCancelledSuccessfully",
                "keyword_value"=> "تم إلغاء الطلب بنجاح"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 328,
                "keyword_name"=> "placeOrderByMistake",
                "keyword_value"=> "تم تقديم الطلب عن طريق الخطأ"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 329,
                "keyword_name"=> "deliveryTimeIsTooLong",
                "keyword_value"=> "وقت التسليم طويل جدًا"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 330,
                "keyword_name"=> "duplicateOrder",
                "keyword_value"=> "طلب مكرر"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 331,
                "keyword_name"=> "changeOfMind",
                "keyword_value"=> "تغيير في الرأي"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 332,
                "keyword_name"=> "changeOrder",
                "keyword_value"=> "تغيير الطلب"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 333,
                "keyword_name"=> "incorrectIncompleteAddress",
                "keyword_value"=> "عنوان غير صحيح/ناقص"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 334,
                "keyword_name"=> "wrongContactInformation",
                "keyword_value"=> "معلومات اتصال خاطئة"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 335,
                "keyword_name"=> "paymentIssue",
                "keyword_value"=> "مشكلة في الدفع"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 336,
                "keyword_name"=> "personNotAvailableOnLocation",
                "keyword_value"=> "الشخص غير متاح في الموقع"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 337,
                "keyword_name"=> "invalidCourierPackage",
                "keyword_value"=> "طرد شحن غير صالح"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 338,
                "keyword_name"=> "courierPackageIsNotAsPerOrder",
                "keyword_value"=> "طرد الشحن لا يتطابق مع الطلب"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 339,
                "keyword_name"=> "invalidOrder",
                "keyword_value"=> "طلب غير صالح"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 117,
                "keyword_name"=> "damageCourier",
                "keyword_value"=> "طرد تالف"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 315,
                "keyword_name"=> "sentWrongCourier",
                "keyword_value"=> "إرسال طرد خاطئ"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 276,
                "keyword_name"=> "notAsOrder",
                "keyword_value"=> "ليس كما في الطلب"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 404,
                "keyword_name"=> "isPaymentCollected",
                "keyword_value"=> "هل تم تحصيل الدفع؟"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 409,
                "keyword_name"=> "collectedAmount",
                "keyword_value"=> "المبلغ المحصل"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 601,
                "keyword_name"=> "proof",
                "keyword_value"=> "إثبات"
              ],
              [
                "screenId"=> "35",
                "keyword_id"=> 602,
                "keyword_name"=> "proofDataValidation",
                "keyword_value"=> "يمكنك إضافة 3 بيانات إثبات فقط."
              ]
            ]
          ],
          [
            "screenID"=> "36",
            "ScreenName"=> "TrackingScreen",
            "keyword_data"=> [
              [
                "screenId"=> "36",
                "keyword_id"=> 265,
                "keyword_name"=> "yourLocation",
                "keyword_value"=> "موقعك"
              ],
              [
                "screenId"=> "36",
                "keyword_id"=> 266,
                "keyword_name"=> "lastUpdateAt",
                "keyword_value"=> "آخر تحديث في"
              ],
              [
                "screenId"=> "36",
                "keyword_id"=> 267,
                "keyword_name"=> "trackingOrder",
                "keyword_value"=> "تتبع الطلب"
              ]
            ]
          ],
          [
            "screenID"=> "37",
            "ScreenName"=> "VerifyDeliveryPersonScreen",
            "keyword_data"=> [
              [
                "screenId"=> "37",
                "keyword_id"=> 268,
                "keyword_name"=> "uploadFileConfirmationMsg",
                "keyword_value"=> "هل أنت متأكد أنك تريد تحميل هذا الملف؟"
              ],
              [
                "screenId"=> "37",
                "keyword_id"=> 269,
                "keyword_name"=> "pending",
                "keyword_value"=> "قيد الانتظار"
              ],
              [
                "screenId"=> "37",
                "keyword_id"=> 270,
                "keyword_name"=> "approved",
                "keyword_value"=> "موافق عليه"
              ],
              [
                "screenId"=> "37",
                "keyword_id"=> 271,
                "keyword_name"=> "rejected",
                "keyword_value"=> "مرفوض"
              ],
              [
                "screenId"=> "37",
                "keyword_id"=> 272,
                "keyword_name"=> "selectDocument",
                "keyword_value"=> "اختر مستندًا"
              ],
              [
                "screenId"=> "37",
                "keyword_id"=> 273,
                "keyword_name"=> "addDocument",
                "keyword_value"=> "إضافة مستند"
              ]
            ]
          ],
          [
            "screenID"=> "38",
            "ScreenName"=> "WithDrawScreen",
            "keyword_data"=> [
              [
                "screenId"=> "38",
                "keyword_id"=> 274,
                "keyword_name"=> "declined",
                "keyword_value"=> "مرفوض"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 275,
                "keyword_name"=> "requested",
                "keyword_value"=> "مطلوب"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 277,
                "keyword_name"=> "withdrawHistory",
                "keyword_value"=> "سجل السحب"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 278,
                "keyword_name"=> "withdrawMoney",
                "keyword_value"=> "سحب الأموال"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 426,
                "keyword_name"=> "details",
                "keyword_value"=> "تفاصيل"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 427,
                "keyword_name"=> "withdrawDetails",
                "keyword_value"=> "تفاصيل السحب"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 428,
                "keyword_name"=> "transactionId",
                "keyword_value"=> "معرف المعاملة"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 429,
                "keyword_name"=> "via",
                "keyword_value"=> "عبر"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 430,
                "keyword_name"=> "createdDate",
                "keyword_value"=> "تاريخ الإنشاء"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 431,
                "keyword_name"=> "otherDetails",
                "keyword_value"=> "تفاصيل أخرى"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 432,
                "keyword_name"=> "image",
                "keyword_value"=> "صورة"
              ],
              [
                "screenId"=> "38",
                "keyword_id"=> 433,
                "keyword_name"=> "chatWithAdmin",
                "keyword_value"=> "الدردشة مع المشرف"
              ]
            ]
          ],
          [
            "screenID"=> "39",
            "ScreenName"=> "OrderFragment",
            "keyword_data"=> [
              [
                "screenId"=> "39",
                "keyword_id"=> 292,
                "keyword_name"=> "invoice",
                "keyword_value"=> "فاتورة"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 293,
                "keyword_name"=> "customerName",
                "keyword_value"=> "اسم العميل:"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 294,
                "keyword_name"=> "deliveredTo",
                "keyword_value"=> "تم التسليم إلى:"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 295,
                "keyword_name"=> "invoiceNo",
                "keyword_value"=> "رقم الفاتورة:"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 296,
                "keyword_name"=> "invoiceDate",
                "keyword_value"=> "تاريخ الفاتورة:"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 297,
                "keyword_name"=> "orderedDate",
                "keyword_value"=> "تاريخ الطلب:"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 298,
                "keyword_name"=> "invoiceCapital",
                "keyword_value"=> "فاتورة"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 299,
                "keyword_name"=> "product",
                "keyword_value"=> "المنتج"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 300,
                "keyword_name"=> "price",
                "keyword_value"=> "السعر"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 301,
                "keyword_name"=> "subTotal",
                "keyword_value"=> "المجموع الفرعي"
              ],
              [
                "screenId"=> "39",
                "keyword_id"=> 316,
                "keyword_name"=> "paid",
                "keyword_value"=> "مدفوع"
              ]
            ]
          ],
          [
            "screenID"=> "40",
            "ScreenName"=> "StoreListScreen",
            "keyword_data"=> [
              [
                "screenId"=> "40",
                "keyword_id"=> 357,
                "keyword_name"=> "searchStores",
                "keyword_value"=> "بحث المتاجر"
              ],
              [
                "screenId"=> "40",
                "keyword_id"=> 358,
                "keyword_name"=> "nearest",
                "keyword_value"=> "الأقرب"
              ],
              [
                "screenId"=> "40",
                "keyword_id"=> 359,
                "keyword_name"=> "rightNowStoreNotAvailable",
                "keyword_value"=> "لا يوجد أي متجر متاح حاليًا. تحقق مرة أخرى لاحقًا."
              ],
              [
                "screenId"=> "40",
                "keyword_id"=> 369,
                "keyword_name"=> "stores",
                "keyword_value"=> "المتاجر"
              ],
              [
                "screenId"=> "40",
                "keyword_id"=> 370,
                "keyword_name"=> "closed",
                "keyword_value"=> "مغلق"
              ],
              [
                "screenId"=> "40",
                "keyword_id"=> 371,
                "keyword_name"=> "favouriteStore",
                "keyword_value"=> "المتجر المفضل"
              ],
              [
                "screenId"=> "40",
                "keyword_id"=> 377,
                "keyword_name"=> "openIn",
                "keyword_value"=> "يفتح خلال"
              ],
              [
                "screenId"=> "40",
                "keyword_id"=> 378,
                "keyword_name"=> "min",
                "keyword_value"=> "دقيقة"
              ]
            ]
          ],
          [
            "screenID"=> "41",
            "ScreenName"=> "ProductListScreen",
            "keyword_data"=> [
              [
                "screenId"=> "41",
                "keyword_id"=> 360,
                "keyword_name"=> "products",
                "keyword_value"=> "المنتجات"
              ],
              [
                "screenId"=> "41",
                "keyword_id"=> 361,
                "keyword_name"=> "itemsAdded",
                "keyword_value"=> "تمت إضافة العناصر"
              ],
              [
                "screenId"=> "41",
                "keyword_id"=> 362,
                "keyword_name"=> "items",
                "keyword_value"=> "العناصر"
              ],
              [
                "screenId"=> "41",
                "keyword_id"=> 363,
                "keyword_name"=> "item",
                "keyword_value"=> "العنصر"
              ],
              [
                "screenId"=> "41",
                "keyword_id"=> 364,
                "keyword_name"=> "added",
                "keyword_value"=> "تمت الإضافة"
              ],
              [
                "screenId"=> "41",
                "keyword_id"=> 365,
                "keyword_name"=> "categoryFilter",
                "keyword_value"=> "تصفية الفئة"
              ],
              [
                "screenId"=> "41",
                "keyword_id"=> 366,
                "keyword_name"=> "apply",
                "keyword_value"=> "تطبيق"
              ],
              [
                "screenId"=> "41",
                "keyword_id"=> 379,
                "keyword_name"=> "goToStore",
                "keyword_value"=> "الذهاب إلى المتجر"
              ]
            ]
          ],
          [
            "screenID"=> "42",
            "ScreenName"=> "VerificationListScreen",
            "keyword_data"=> [
              [
                "screenId"=> "42",
                "keyword_id"=> 380,
                "keyword_name"=> "verify",
                "keyword_value"=> "تحقق"
              ],
              [
                "screenId"=> "42",
                "keyword_id"=> 381,
                "keyword_name"=> "verified",
                "keyword_value"=> "تم التحقق"
              ],
              [
                "screenId"=> "42",
                "keyword_id"=> 382,
                "keyword_name"=> "youMustVerifyAboveAll",
                "keyword_value"=> "يجب عليك التحقق من جميع ما سبق"
              ],
              [
                "screenId"=> "42",
                "keyword_id"=> 383,
                "keyword_name"=> "verificationYouMustDo",
                "keyword_value"=> "التحقق الذي يجب عليك القيام به"
              ],
              [
                "screenId"=> "42",
                "keyword_id"=> 384,
                "keyword_name"=> "documentVerification",
                "keyword_value"=> "تحقق المستند"
              ],
              [
                "screenId"=> "42",
                "keyword_id"=> 385,
                "keyword_name"=> "uploadYourDocument",
                "keyword_value"=> "قم بتحميل مستنداتك للتحقق."
              ],
              [
                "screenId"=> "42",
                "keyword_id"=> 386,
                "keyword_name"=> "mobileOtp",
                "keyword_value"=> "OTP الهاتف"
              ],
              [
                "screenId"=> "42",
                "keyword_id"=> 387,
                "keyword_name"=> "verifyYourMobileNumber",
                "keyword_value"=> "تحقق من رقم هاتفك."
              ],
              [
                "screenId"=> "42",
                "keyword_id"=> 388,
                "keyword_name"=> "emailOtp",
                "keyword_value"=> "OTP البريد الإلكتروني"
              ],
              [
                "screenId"=> "42",
                "keyword_id"=> 389,
                "keyword_name"=> "veirfyYourEmailAddress",
                "keyword_value"=> "تحقق من عنوان بريدك الإلكتروني."
              ]
            ]
          ],
          [
            "screenID"=> "43",
            "ScreenName"=> "DHomeFragment",
            "keyword_data"=> [
              [
                "screenId"=> "43",
                "keyword_id"=> 394,
                "keyword_name"=> "mustSelectDate",
                "keyword_value"=> "يجب تحديد تاريخ"
              ],
              [
                "screenId"=> "43",
                "keyword_id"=> 395,
                "keyword_name"=> "filterBelowCount",
                "keyword_value"=> "تصفية حسب العدد"
              ],
              [
                "screenId"=> "43",
                "keyword_id"=> 396,
                "keyword_name"=> "viewAllOrders",
                "keyword_value"=> "عرض جميع الطلبات"
              ],
              [
                "screenId"=> "43",
                "keyword_id"=> 397,
                "keyword_name"=> "todayOrder",
                "keyword_value"=> "طلبات اليوم"
              ],
              [
                "screenId"=> "43",
                "keyword_id"=> 398,
                "keyword_name"=> "remainingOrder",
                "keyword_value"=> "الطلبات المتبقية"
              ],
              [
                "screenId"=> "43",
                "keyword_id"=> 399,
                "keyword_name"=> "completedOrder",
                "keyword_value"=> "الطلبات المكتملة"
              ],
              [
                "screenId"=> "43",
                "keyword_id"=> 400,
                "keyword_name"=> "inProgressOrder",
                "keyword_value"=> "الطلبات قيد التنفيذ"
              ],
              [
                "screenId"=> "43",
                "keyword_id"=> 401,
                "keyword_name"=> "walletBalance",
                "keyword_value"=> "رصيد المحفظة"
              ],
              [
                "screenId"=> "43",
                "keyword_id"=> 402,
                "keyword_name"=> "pendingWithdReq",
                "keyword_value"=> "طلبات السحب المعلقة"
              ],
              [
                "screenId"=> "43",
                "keyword_id"=> 403,
                "keyword_name"=> "completedWithReq",
                "keyword_value"=> "طلبات السحب المكتملة"
              ]
            ]
          ],
          [
            "screenID"=> "44",
            "ScreenName"=> "RewardListScreen",
            "keyword_data"=> [
              [
                "screenId"=> "44",
                "keyword_id"=> 412,
                "keyword_name"=> "earnedRewards",
                "keyword_value"=> "المكافآت المكتسبة"
              ]
            ]
          ],
          [
            "screenID"=> "45",
            "ScreenName"=> "ReferEarnScreen",
            "keyword_data"=> [
              [
                "screenId"=> "45",
                "keyword_id"=> 413,
                "keyword_name"=> "referAndEarn",
                "keyword_value"=> "ادعُ صديقًا واربح "
              ],
              [
                "screenId"=> "45",
                "keyword_id"=> 470,
                "keyword_name"=> "referDes1",
                "keyword_value"=> "قم بإحالة صديقك واحصل على مكافأة تصل إلى"
              ],
              [
                "screenId"=> "45",
                "keyword_id"=> 471,
                "keyword_name"=> "referDes2",
                "keyword_value"=> "كل شهر"
              ],
              [
                "screenId"=> "45",
                "keyword_id"=> 472,
                "keyword_name"=> "referShareTitle",
                "keyword_value"=> "شارك هذا الرمز مع صديقك للحصول على مكافآت تصل إلى"
              ],
              [
                "screenId"=> "45",
                "keyword_id"=> 473,
                "keyword_name"=> "shareDes1",
                "keyword_value"=> "'أنا أستخدم هذا"
              ],
              [
                "screenId"=> "45",
                "keyword_id"=> 474,
                "keyword_name"=> "shareDes2",
                "keyword_value"=> "وأعتقد أنك قد ترغب فيه أيضًا. استخدم رمز الإحالة الخاص بي"
              ],
              [
                "screenId"=> "45",
                "keyword_id"=> 475,
                "keyword_name"=> "shareDes3",
                "keyword_value"=> " للتسجيل والحصول على بعض المكافآت الرائعة!"
              ],
              [
                "screenId"=> "45",
                "keyword_id"=> 519,
                "keyword_name"=> "copiedToClipBoard",
                "keyword_value"=> "تم النسخ إلى الحافظة"
              ],
              [
                "screenId"=> "45",
                "keyword_id"=> 520,
                "keyword_name"=> "yourVehicle",
                "keyword_value"=> "مركبتك"
              ],
              [
                "screenId"=> "45",
                "keyword_id"=> 521,
                "keyword_name"=> "noVehicleAdded",
                "keyword_value"=> "لا توجد مركبة مضافة"
              ]
            ]
          ],
          [
            "screenID"=> "46",
            "ScreenName"=> "ReferralHistoryScreen",
            "keyword_data"=> [
              [
                "screenId"=> "46",
                "keyword_id"=> 414,
                "keyword_name"=> "referralHistory",
                "keyword_value"=> "سجل الإحالات"
              ],
              [
                "screenId"=> "46",
                "keyword_id"=> 447,
                "keyword_name"=> "userType",
                "keyword_value"=> "نوع المستخدم"
              ]
            ]
          ],
          [
            "screenID"=> "47",
            "ScreenName"=> "CustomerSupportScreen",
            "keyword_data"=> [
              [
                "screenId"=> "47",
                "keyword_id"=> 415,
                "keyword_name"=> "customerSupport",
                "keyword_value"=> "دعم العملاء"
              ]
            ]
          ],
          [
            "screenID"=> "48",
            "ScreenName"=> "FilterCountScreen",
            "keyword_data"=> [
              [
                "screenId"=> "48",
                "keyword_id"=> 416,
                "keyword_name"=> "today",
                "keyword_value"=> "اليوم"
              ],
              [
                "screenId"=> "48",
                "keyword_id"=> 417,
                "keyword_name"=> "yesterday",
                "keyword_value"=> "أمس"
              ],
              [
                "screenId"=> "48",
                "keyword_id"=> 418,
                "keyword_name"=> "thisWeek",
                "keyword_value"=> "هذا الأسبوع"
              ],
              [
                "screenId"=> "48",
                "keyword_id"=> 419,
                "keyword_name"=> "thisMonth",
                "keyword_value"=> "هذا الشهر"
              ],
              [
                "screenId"=> "48",
                "keyword_id"=> 420,
                "keyword_name"=> "thisYear",
                "keyword_value"=> "هذه السنة"
              ],
              [
                "screenId"=> "48",
                "keyword_id"=> 421,
                "keyword_name"=> "custom",
                "keyword_value"=> "مخصص"
              ],
              [
                "screenId"=> "48",
                "keyword_id"=> 422,
                "keyword_name"=> "orderFilter",
                "keyword_value"=> "تصفية الطلبات"
              ]
            ]
          ],
          [
            "screenID"=> "49",
            "ScreenName"=> "OrdersMapScreen",
            "keyword_data"=> [
              [
                "screenId"=> "49",
                "keyword_id"=> 423,
                "keyword_name"=> "pendingPickup",
                "keyword_value"=> "في انتظار الاستلام"
              ],
              [
                "screenId"=> "49",
                "keyword_id"=> 424,
                "keyword_name"=> "pendingDelivery",
                "keyword_value"=> "في انتظار التسليم"
              ],
              [
                "screenId"=> "49",
                "keyword_id"=> 425,
                "keyword_name"=> "view",
                "keyword_value"=> "عرض"
              ]
            ]
          ],
          [
            "screenID"=> "50",
            "ScreenName"=> "AddSupportTicketScreen",
            "keyword_data"=> [
              [
                "screenId"=> "50",
                "keyword_id"=> 435,
                "keyword_name"=> "addSupportTicket",
                "keyword_value"=> "إضافة تذكرة دعم"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 436,
                "keyword_name"=> "message",
                "keyword_value"=> "رسالة"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 437,
                "keyword_name"=> "supportType",
                "keyword_value"=> "نوع الدعم"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 438,
                "keyword_name"=> "uploadDetails",
                "keyword_value"=> "تحميل التفاصيل"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 439,
                "keyword_name"=> "video",
                "keyword_value"=> "فيديو"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 440,
                "keyword_name"=> "select",
                "keyword_value"=> "اختر"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 441,
                "keyword_name"=> "supportId",
                "keyword_value"=> "معرف الدعم"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 442,
                "keyword_name"=> "attachment",
                "keyword_value"=> "مرفق"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 443,
                "keyword_name"=> "viewPhoto",
                "keyword_value"=> "عرض الصورة"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 444,
                "keyword_name"=> "viewVideo",
                "keyword_value"=> "عرض الفيديو"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 445,
                "keyword_name"=> "resolutionDetails",
                "keyword_value"=> "تفاصيل الحل"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 446,
                "keyword_name"=> "completedOrders",
                "keyword_value"=> "الطلبات المكتملة"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 512,
                "keyword_name"=> "supportType1",
                "keyword_value"=> "الطلبات"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 513,
                "keyword_name"=> "supportType2",
                "keyword_value"=> "مندوب التوصيل"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 514,
                "keyword_name"=> "supportType3",
                "keyword_value"=> "إرجاع الطلب"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 515,
                "keyword_name"=> "supportType4",
                "keyword_value"=> "توقيت التسليم"
              ],
              [
                "screenId"=> "50",
                "keyword_id"=> 633,
                "keyword_name"=> "supportType5",
                "keyword_value"=> "الإبلاغ ضد مندوب التوصيل"
              ]
            ]
          ],
          [
            "screenID"=> "51",
            "ScreenName"=> "AddAddressScreen",
            "keyword_data"=> [
              [
                "screenId"=> "51",
                "keyword_id"=> 453,
                "keyword_name"=> "home",
                "keyword_value"=> "المنزل"
              ],
              [
                "screenId"=> "51",
                "keyword_id"=> 454,
                "keyword_name"=> "work",
                "keyword_value"=> "العمل"
              ],
              [
                "screenId"=> "51",
                "keyword_id"=> 455,
                "keyword_name"=> "selectAddressType",
                "keyword_value"=> "اختر نوع العنوان"
              ]
            ]
          ],
          [
            "screenID"=> "52",
            "ScreenName"=> "RateReviewScreen",
            "keyword_data"=> [
              [
                "screenId"=> "52",
                "keyword_id"=> 468,
                "keyword_name"=> "rateUs",
                "keyword_value"=> "قيمنا"
              ],
              [
                "screenId"=> "52",
                "keyword_id"=> 469,
                "keyword_name"=> "excellent",
                "keyword_value"=> "ممتاز..."
              ],
              [
                "screenId"=> "52",
                "keyword_id"=> 630,
                "keyword_name"=> "rateExp",
                "keyword_value"=> "كيف تقيم تجربتك مع مندوب التوصيل؟"
              ],
              [
                "screenId"=> "52",
                "keyword_id"=> 631,
                "keyword_name"=> "writeYourReview",
                "keyword_value"=> "اكتب تقييمك"
              ],
              [
                "screenId"=> "52",
                "keyword_id"=> 632,
                "keyword_name"=> "unknownDeliveryman",
                "keyword_value"=> "مندوب توصيل غير معروف"
              ]
            ]
          ],
          [
            "screenID"=> "53",
            "ScreenName"=> "PackagingSymbolsInfo",
            "keyword_data"=> [
              [
                "screenId"=> "53",
                "keyword_id"=> 479,
                "keyword_name"=> "thisWayUup",
                "keyword_value"=> "هذا الطريق لأعلى"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 480,
                "keyword_name"=> "thisWayUpDesc",
                "keyword_value"=> "يوضح الوضع الصحيح للطرد لضمان التعامل السليم."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 481,
                "keyword_name"=> "doNotStack",
                "keyword_value"=> "لا تضع فوق بعض"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 482,
                "keyword_name"=> "doNotStackDesc",
                "keyword_value"=> "ينبه أنه لا يجب وضع عناصر أخرى فوق الطرد لمنع التلف."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 483,
                "keyword_name"=> "temperatureSensitive",
                "keyword_value"=> "حساس لدرجة الحرارة"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 484,
                "keyword_name"=> "temperatureSensitiveDesc",
                "keyword_value"=> "يشير إلى أن الطرد يحتوي على عناصر تحتاج إلى الحفاظ عليها في نطاق درجة حرارة معينة."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 485,
                "keyword_name"=> "doNotHook",
                "keyword_value"=> "لا تستخدم الخطافات"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 486,
                "keyword_name"=> "doNotHookDesc",
                "keyword_value"=> "ينبه بعدم استخدام الخطافات لمعالجة أو رفع الطرد."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 487,
                "keyword_name"=> "explosiveMaterial",
                "keyword_value"=> "مواد متفجرة"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 488,
                "keyword_name"=> "explosiveMaterialDesc",
                "keyword_value"=> "يشير إلى أن الطرد يحتوي على مواد متفجرة ويجب التعامل معها بحذر شديد."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 489,
                "keyword_name"=> "hazard",
                "keyword_value"=> "مواد خطرة"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 490,
                "keyword_name"=> "hazardDesc",
                "keyword_value"=> "ينبه أن الطرد يحتوي على مواد خطرة تتطلب معالجة خاصة."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 491,
                "keyword_name"=> "bikeDelivery",
                "keyword_value"=> "توصيل بالدراجة"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 492,
                "keyword_name"=> "bikeDeliveryDesc",
                "keyword_value"=> "يشير إلى أن التوصيل سيتم بالدراجة."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 493,
                "keyword_name"=> "keepDry",
                "keyword_value"=> "حافظ على الجفاف"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 494,
                "keyword_name"=> "keepDryDesc",
                "keyword_value"=> "يشير إلى أن الطرد يجب أن يبقى جافًا ومحميًا من الرطوبة أو الماء."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 495,
                "keyword_name"=> "perishable",
                "keyword_value"=> "قابل للتلف"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 496,
                "keyword_name"=> "perishableDesc",
                "keyword_value"=> "يشير إلى أن الطرد يحتوي على عناصر قابلة للتلف ويجب معالجتها بسرعة لتجنب التلف."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 497,
                "keyword_name"=> "recycle",
                "keyword_value"=> "إعادة تدوير"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 498,
                "keyword_name"=> "recycleDesc",
                "keyword_value"=> "يشير إلى أن مواد التغليف قابلة لإعادة التدوير."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 499,
                "keyword_name"=> "doNotOpenWithSharpObject",
                "keyword_value"=> "لا تفتح بأدوات حادة"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 500,
                "keyword_name"=> "doNotOpenWithSharpObjectDesc",
                "keyword_value"=> "ينبه بعدم استخدام أدوات حادة لفتح الطرد لمنع تلف المحتويات."
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 501,
                "keyword_name"=> "fragile",
                "keyword_value"=> "هش (تعامل بحذر)"
              ],
              [
                "screenId"=> "53",
                "keyword_id"=> 502,
                "keyword_name"=> "fragileDesc",
                "keyword_value"=> "يشير إلى أن محتويات الطرد هشة ويجب التعامل معها بحذر لمنع الكسر."
              ]
            ]
          ],
          [
            "screenID"=> "54",
            "ScreenName"=> "AddDeliverymanVehicleScreen",
            "keyword_data"=> [
              [
                "screenId"=> "54",
                "keyword_id"=> 522,
                "keyword_name"=> "updateVehicle",
                "keyword_value"=> "تحديث المركبة"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 523,
                "keyword_name"=> "vehicleInfo",
                "keyword_value"=> "معلومات المركبة"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 524,
                "keyword_name"=> "addVehicle",
                "keyword_value"=> "إضافة مركبة"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 525,
                "keyword_name"=> "model",
                "keyword_value"=> "الموديل"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 526,
                "keyword_name"=> "color",
                "keyword_value"=> "اللون"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 527,
                "keyword_name"=> "yearOfManufacturing",
                "keyword_value"=> "سنة التصنيع"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 528,
                "keyword_name"=> "vehicleIdentificationNumber",
                "keyword_value"=> "رقم تعريف المركبة"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 529,
                "keyword_name"=> "licensePlateNumber",
                "keyword_value"=> "رقم لوحة الترخيص"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 530,
                "keyword_name"=> "currentMileage",
                "keyword_value"=> "عدد الأميال الحالي"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 531,
                "keyword_name"=> "fuelType",
                "keyword_value"=> "نوع الوقود"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 532,
                "keyword_name"=> "transmissionType",
                "keyword_value"=> "نوع ناقل الحركة"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 533,
                "keyword_name"=> "ownerName",
                "keyword_value"=> "اسم المالك"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 534,
                "keyword_name"=> "registrationDate",
                "keyword_value"=> "تاريخ التسجيل"
              ],
              [
                "screenId"=> "54",
                "keyword_id"=> 535,
                "keyword_name"=> "ownerNumber",
                "keyword_value"=> "رقم المالك"
              ]
            ]
          ],
          [
            "screenID"=> "55",
            "ScreenName"=> "SelectVehicleScreen",
            "keyword_data"=> [
              [
                "screenId"=> "55",
                "keyword_id"=> 536,
                "keyword_name"=> "id",
                "keyword_value"=> "المعرف"
              ],
              [
                "screenId"=> "55",
                "keyword_id"=> 537,
                "keyword_name"=> "active",
                "keyword_value"=> "نشط"
              ],
              [
                "screenId"=> "55",
                "keyword_id"=> 538,
                "keyword_name"=> "inActive",
                "keyword_value"=> "غير نشط"
              ],
              [
                "screenId"=> "55",
                "keyword_id"=> 539,
                "keyword_name"=> "startDate",
                "keyword_value"=> "تاريخ البدء"
              ],
              [
                "screenId"=> "55",
                "keyword_id"=> 540,
                "keyword_name"=> "endDate",
                "keyword_value"=> "تاريخ الانتهاء"
              ],
              [
                "screenId"=> "55",
                "keyword_id"=> 541,
                "keyword_name"=> "clickHere",
                "keyword_value"=> "انقر هنا"
              ]
            ]
          ],
          [
            "screenID"=> "56",
            "ScreenName"=> "ClaimScreen",
            "keyword_data"=> [
              [
                "screenId"=> "56",
                "keyword_id"=> 544,
                "keyword_name"=> "claimHistory",
                "keyword_value"=> "سجل المطالبات"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 545,
                "keyword_name"=> "proofValue",
                "keyword_value"=> "قيمة الإثبات"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 546,
                "keyword_name"=> "trackinNo",
                "keyword_value"=> "رقم التتبع"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 548,
                "keyword_name"=> "ofApproxParcelValue",
                "keyword_value"=> "% من القيمة التقريبية للطرد"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 550,
                "keyword_name"=> "claimInsurance",
                "keyword_value"=> "المطالبة بالتأمين"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 551,
                "keyword_name"=> "fillTheDetailsForClaim",
                "keyword_value"=> "املأ التفاصيل للمطالبة"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 552,
                "keyword_name"=> "addAttachmentMsg",
                "keyword_value"=> "الرجاء إضافة صور أو ملفات pdf لمزيد من الوضوح، ومع ذلك ليس من الضروري القيام بذلك انقر 'مطالبة' للمتابعة."
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 553,
                "keyword_name"=> "title",
                "keyword_value"=> "العنوان"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 554,
                "keyword_name"=> "enterProofValue",
                "keyword_value"=> "أدخل قيمة الإثبات"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 555,
                "keyword_name"=> "selectedFiles",
                "keyword_value"=> "الملفات المحددة"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 556,
                "keyword_name"=> "addProofs",
                "keyword_value"=> "إضافة إثباتات"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 543,
                "keyword_name"=> "claim",
                "keyword_value"=> "مطالبة"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 557,
                "keyword_name"=> "proofDetails",
                "keyword_value"=> "تفاصيل الإثبات"
              ],
              [
                "screenId"=> "56",
                "keyword_id"=> 561,
                "keyword_name"=> "approvedAmount",
                "keyword_value"=> "المبلغ المعتمد"
              ]
            ]
          ],
          [
            "screenID"=> "57",
            "ScreenName"=> "BidListScreen",
            "keyword_data"=> [
              [
                "screenId"=> "57",
                "keyword_id"=> 567,
                "keyword_name"=> "acceptBid",
                "keyword_value"=> "قبول العرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 568,
                "keyword_name"=> "viewAll",
                "keyword_value"=> "عرض الكل"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 569,
                "keyword_name"=> "estimateAmount",
                "keyword_value"=> "المبلغ المقدر"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 570,
                "keyword_name"=> "decline",
                "keyword_value"=> "رفض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 571,
                "keyword_name"=> "declineBidConfirm",
                "keyword_value"=> "هل أنت متأكد أنك تريد رفض هذا العرض؟"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 572,
                "keyword_name"=> "cancelBid",
                "keyword_value"=> "إلغاء العرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 573,
                "keyword_name"=> "withdrawBid",
                "keyword_value"=> "سحب العرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 574,
                "keyword_name"=> "withdrawBidConfirm",
                "keyword_value"=> "هل تريد سحب هذا العرض؟"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 575,
                "keyword_name"=> "confirm",
                "keyword_value"=> "تأكيد"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 576,
                "keyword_name"=> "confirmBid",
                "keyword_value"=> "تأكيد العرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 577,
                "keyword_name"=> "saySomething",
                "keyword_value"=> "قل شيئًا... (اختياري)"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 578,
                "keyword_name"=> "placeYourBid",
                "keyword_value"=> "ضع عرضك"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 579,
                "keyword_name"=> "deliveryBid",
                "keyword_value"=> "عروض التوصيل"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 580,
                "keyword_name"=> "note",
                "keyword_value"=> "ملاحظة"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 581,
                "keyword_name"=> "noNotesAvailable",
                "keyword_value"=> "لا توجد ملاحظات متاحة"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 582,
                "keyword_name"=> "bidAmount",
                "keyword_value"=> "مبلغ العرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 583,
                "keyword_name"=> "bidFetchFailedMsg",
                "keyword_value"=> "فشل جلب العروض. يرجى المحاولة مرة أخرى."
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 584,
                "keyword_name"=> "bids",
                "keyword_value"=> "العروض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 585,
                "keyword_name"=> "noBidsFound",
                "keyword_value"=> "لا توجد عروض لهذا الطلب! يرجى الانتظار."
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 586,
                "keyword_name"=> "bidRequest",
                "keyword_value"=> "طلب عرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 587,
                "keyword_name"=> "acceptBidConfirm",
                "keyword_value"=> "هل تريد قبول هذا العرض؟"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 588,
                "keyword_name"=> "close",
                "keyword_value"=> "إغلاق"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 589,
                "keyword_name"=> "orderAvailableForBidding",
                "keyword_value"=> "طلبات جديدة متاحة للعطاء"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 590,
                "keyword_name"=> "bidAvailableForCancel",
                "keyword_value"=> "يمكن إلغاء العرض المقدم"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 610,
                "keyword_name"=> "viewAllBids",
                "keyword_value"=> "عرض جميع العروض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 591,
                "keyword_name"=> "bidAccepted",
                "keyword_value"=> "تم قبول العرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 592,
                "keyword_name"=> "bidPlaced",
                "keyword_value"=> "تم تقديم العرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 593,
                "keyword_name"=> "newOrder",
                "keyword_value"=> "طلب جديد"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 594,
                "keyword_name"=> "bidRejected",
                "keyword_value"=> "تم رفض العرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 595,
                "keyword_name"=> "placeBid",
                "keyword_value"=> "تقديم عرض"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 596,
                "keyword_name"=> "totalAmount",
                "keyword_value"=> "المبلغ الإجمالي"
              ],
              [
                "screenId"=> "57",
                "keyword_id"=> 597,
                "keyword_name"=> "youPlaced",
                "keyword_value"=> "لقد قدمت"
              ]
            ]
          ],
          [
            "screenID"=> "58",
            "ScreenName"=> "CouponListScreen",
            "keyword_data"=> [
              [
                "screenId"=> "58",
                "keyword_id"=> 603,
                "keyword_name"=> "couponList",
                "keyword_value"=> "قائمة القسائم"
              ],
              [
                "screenId"=> "58",
                "keyword_id"=> 604,
                "keyword_name"=> "expiresIn",
                "keyword_value"=> "ينتهي في:"
              ],
              [
                "screenId"=> "58",
                "keyword_id"=> 605,
                "keyword_name"=> "days",
                "keyword_value"=> "أيام"
              ],
              [
                "screenId"=> "58",
                "keyword_id"=> 606,
                "keyword_name"=> "hrs",
                "keyword_value"=> "ساعات"
              ],
              [
                "screenId"=> "58",
                "keyword_id"=> 607,
                "keyword_name"=> "mins",
                "keyword_value"=> "دقائق"
              ],
              [
                "screenId"=> "58",
                "keyword_id"=> 608,
                "keyword_name"=> "secs",
                "keyword_value"=> "ثواني"
              ],
              [
                "screenId"=> "58",
                "keyword_id"=> 609,
                "keyword_name"=> "couponApplied",
                "keyword_value"=> "تم تطبيق القسيمة"
              ]
            ]
          ],
          [
            "screenID"=> "59",
            "ScreenName"=> "ForceUpdateDialog",
            "keyword_data"=>[
              [
                "screenId"=> "59",
                "keyword_id"=> 611,
                "keyword_name"=> "updateAvailable",
                "keyword_value"=> "تحديث متاح"
              ],
              [
                "screenId"=> "59",
                "keyword_id"=> 612,
                "keyword_name"=> "updateNow",
                "keyword_value"=> "تحديث الآن"
              ],
              [
                "screenId"=> "59",
                "keyword_id"=> 613,
                "keyword_name"=> "updateNote",
                "keyword_value"=> "تحديث جديد للتطبيق متاح، يرجى التحديث!."
              ]
            ]],
          [
            "screenID"=> "60",
            "ScreenName"=> "Paytrscreen",
            "keyword_data"=> [
              [
                "screenId"=> "60",
                "keyword_id"=> 618,
                "keyword_name"=> "cardHolder",
                "keyword_value"=> "صاحب البطاقة"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 619,
                "keyword_name"=> "expires",
                "keyword_value"=> "تنتهي في"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 620,
                "keyword_name"=> "cardNumber",
                "keyword_value"=> "رقم البطاقة"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 621,
                "keyword_name"=> "cardHolderName",
                "keyword_value"=> "اسم صاحب البطاقة"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 622,
                "keyword_name"=> "expiry",
                "keyword_value"=> "تاريخ الانتهاء"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 623,
                "keyword_name"=> "expiryValidation",
                "keyword_value"=> "تاريخ الانتهاء مطلوب"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 624,
                "keyword_name"=> "invalidExpiryDate",
                "keyword_value"=> "تاريخ انتهاء غير صالح"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 625,
                "keyword_name"=> "cvv",
                "keyword_value"=> "CVV"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 626,
                "keyword_name"=> "cvvValidation",
                "keyword_value"=> "CVV مطلوب"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 627,
                "keyword_name"=> "invalidCvv",
                "keyword_value"=> "CVV غير صالح"
              ],
              [
                "screenId"=> "60",
                "keyword_id"=> 628,
                "keyword_name"=> "pay",
                "keyword_value"=> "دفع"
              ]
            ]
          ],
          [
            "screenID"=> "61",
            "ScreenName"=> "PaytrPaymentHistoryscreen",
            "keyword_data"=> [
              [
                "screenId"=> "61",
                "keyword_id"=> 629,
                "keyword_name"=> "paytrHistory",
                "keyword_value"=> "سجل Paytr"
              ]
            ]
          ],
          [
            "screenID"=> "62",
            "ScreenName"=> "SOSScreen",
            "keyword_data"=> [
             [
                "screenId"=> "62",
                "keyword_id"=> 634,
                "keyword_name"=> "show",
                "keyword_value"=> "عرض"
              ],
          [
            "screenId"=> "62",
            "keyword_id"=> 635,
            "keyword_name"=> "addSOSContacts",
            "keyword_value"=> "إضافة جهات اتصال الطوارئ"
          ]
            ]
          ],
          [
            "screenID"=> "63",
            "ScreenName"=> "ResolveEmergencyScreen",
            "keyword_data"=> [
              [
                "screenId"=> "63",
                "keyword_id"=> 636,
                "keyword_name"=> "resolveEmergencyDialogTitle",
                "keyword_value"=> "حل تنبيه الطوارئ المعلق!"
              ],
              [
                "screenId"=> "63",
                "keyword_id"=> 637,
                "keyword_name"=> "resolveEmergencyDialogDesc",
                "keyword_value"=> "حاليًا لديك طوارئ معلقة تحتاج إلى حلها أولاً للوصول إلى التطبيق حيث يوجد طوارئ معلقة تحتاج إلى الحل."
              ],
              [
                "screenId"=> "63",
                "keyword_id"=> 638,
                "keyword_name"=> "resolve",
                "keyword_value"=> "حل"
              ],
              [
                "screenId"=> "63",
                "keyword_id"=> 639,
                "keyword_name"=> "emergencyAlert",
                "keyword_value"=> "تنبيه الطوارئ"
              ],
              [
                "screenId"=> "63",
                "keyword_id"=> 640,
                "keyword_name"=> "resolveEmergency",
                "keyword_value"=> "حل الطوارئ"
              ]
            ]
          ]
        ];

    foreach ($screen_data as $screen) {
      $screen_record = Screen::where('screenID', $screen['screenID'])->first();

      if ($screen_record == null) {
        $screen_record = Screen::create([
          'screenId'   => $screen['screenID'],
          'screenName' => $screen['ScreenName']
        ]);
      }

      if (isset($screen['keyword_data']) && count($screen['keyword_data']) > 0) {
        foreach ($screen['keyword_data'] as $keyword_data) {
          $keyword_record = DefaultKeyword::where('keyword_id', $keyword_data['keyword_id'])->first();

          if ($keyword_record == null) {
            $keyword_record = DefaultKeyword::create([
              'screen_id' => $screen_record['screenId'],
              'keyword_id' => $keyword_data['keyword_id'],
              'keyword_name' => $keyword_data['keyword_name'],
              'keyword_value' => $keyword_data['keyword_value']
            ]);
          }
        }
      }
    }
    $unmatchedKeywords = [];
    foreach ($screen_data as $screen) {
      $screen_record = Screen::where('screenID', $screen['screenID'])->first();

      if ($screen_record == null) {
        $screen_record = Screen::create([
          'screenId'   => $screen['screenID'],
          'screenName' => $screen['ScreenName']
        ]);
      }

      if (isset($screen['keyword_data']) && count($screen['keyword_data']) > 0) {
        foreach ($screen['keyword_data'] as $keyword_data) {
          $keyword_record = DefaultKeyword::where('keyword_id', $keyword_data['keyword_id'])->first();

          if ($keyword_record == null) {
            $keyword_record = DefaultKeyword::create([
              'screen_id' => $screen_record['screenId'],
              'keyword_id' => $keyword_data['keyword_id'],
              'keyword_name' => $keyword_data['keyword_name'],
              'keyword_value' => $keyword_data['keyword_value']
            ]);
          }
          if (!in_array($keyword_data['keyword_id'], $fetchedKeywords)) {
            $unmatchedKeywords[] = $keyword_data;

            foreach ($languageListIds as $languageId) {
                LanguageWithKeyword::create([
                    'screen_id'      => $keyword_data['screenId'],
                    'keyword_id'     => $keyword_data['keyword_id'],
                    'keyword_value'  => $keyword_data['keyword_value'],
                    'language_id'    => $languageId,
                ]);
            }
         }
        }
      }
    }
  }
}