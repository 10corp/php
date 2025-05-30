### শর্ত (Conditions) এবং তুলনা অপারেটর (Comparison Operators)

if...else কাজ করে একটি **শর্ত** (condition) চেক করে। শর্ত হলো এমন একটা প্রশ্ন, যার উত্তর হয় সত্য (true) নয়তো মিথ্যা (false)। উদাহরণস্বরূপ, "তোমার বয়স ১৮ বা তার বেশি কি না?" এই প্রশ্নের উত্তর হয় হ্যাঁ (সত্য) বা না (মিথ্যা)।

শর্ত লিখতে আমরা **তুলনা অপারেটর** ব্যবহার করি। এগুলো হলো:

- `==` (সমান): দুটি মান একই কি না। যেমন, `$age == 18` মানে বয়স ঠিক ১৮ কি না।
- `!=` (সমান নয়): দুটি মান আলাদা কি না। যেমন, `$age != 18` মানে বয়স ১৮ নয়।
- `>` (বড়): একটি মান অন্যটির চেয়ে বড় কি না। যেমন, `$age > 18` মানে বয়স ১৮ এর চেয়ে বড়।
- `<` (ছোট): একটি মান অন্যটির চেয়ে ছোট কি না। যেমন, `$age < 18` মানে বয়স ১৮ এর চেয়ে ছোট।
- `>=` (বড় বা সমান): একটি মান অন্যটির চেয়ে বড় বা সমান কি না। যেমন, `$age >= 18` মানে বয়স ১৮ বা তার বেশি।
- `<=` (ছোট বা সমান): একটি মান অন্যটির চেয়ে ছোট বা সমান কি না। যেমন, `$age <= 18` মানে বয়স ১৮ বা তার কম।

এই অপারেটরগুলো ব্যবহার করে আমরা শর্ত তৈরি করি, যেমন `$age >= 18`। এখন চলুন, এই শর্তগুলো ব্যবহার করে if...else এর কিছু উদাহরণ দেখি।

---

### উদাহরণ: তুলনা অপারেটর দিয়ে if...else

#### উদাহরণ ১: বয়স চেক
ধরুন, আমরা চেক করবো কেউ সিনেমা দেখতে যেতে পারবে কি না। যদি বয়স ১৬ বা তার বেশি হয়, তবে তারা সিনেমা দেখতে পারবে।

```php
<?php
$age = 14;

if ($age >= 16) {
    echo "তুমি সিনেমা দেখতে পারবে।";
} else {
    echo "তুমি সিনেমা দেখতে পারবে না।";
}
?>
```

**ব্যাখ্যা**:
- **শর্ত**: `$age >= 16` — বয়স ১৬ বা তার বেশি কি না।
- যদি সত্য হয়: "তুমি সিনেমা দেখতে পারবে।"
- যদি মিথ্যা হয়: "তুমি সিনেমা দেখতে পারবে না।"
- এখানে `$age = 14`, যেটি ১৬ এর কম। তাই আউটপুট: **তুমি সিনেমা দেখতে পারবে না।**

---

#### উদাহরণ ২: টাকা আছে কি না
ধরুন, আপনার কাছে ১০০ টাকা থাকলে আপনি একটা বই কিনতে পারবেন। না হলে কিনতে পারবেন না।

```php
<?php
$money = 50;

if ($money >= 100) {
    echo "তুমি বই কিনতে পারবে।";
} else {
    echo "তুমি বই কিনতে পারবে না।";
}
?>
```

**ব্যাখ্যা**:
- **শর্ত**: `$money >= 100` — টাকা ১০০ বা তার বেশি কি না।
- যদি সত্য হয়: "তুমি বই কিনতে পারবে।"
- যদি মিথ্যা হয়: "তুমি বই কিনতে পারবে না।"
- এখানে `$money = 50`, যেটি ১০০ এর কম। তাই আউটপুট: **তুমি বই কিনতে পারবে না।**

---

### নতুন ব্যায়াম (Exercises)
এখন আপনি নিজে চেষ্টা করুন! নিচে তিনটি সহজ ব্যায়াম দিচ্ছি। প্রতিটি সমস্যা নিজে সমাধান করার চেষ্টা করুন, তারপর সমাধান দেখুন। এগুলো চালানোর জন্য VSCode বা অনলাইন PHP এডিটর (যেমন phpize.online) ব্যবহার করতে পারেন।

#### ব্যায়াম ১: বাসে যাওয়া
**সমস্যা**: একটি PHP প্রোগ্রাম লিখুন যেটি চেক করবে একজনের কাছে বাসের ভাড়ার জন্য ২০ টাকা আছে কি না। যদি ২০ টাকা বা তার বেশি থাকে, তবে প্রিন্ট করবে "তুমি বাসে যেতে পারবে।" না হলে প্রিন্ট করবে "তুমি বাসে যেতে পারবে না।"

**সমাধান**:
```php
<?php
$fare = 15;

if ($fare >= 20) {
    echo "তুমি বাসে যেতে পারবে।";
} else {
    echo "তুমি বাসে যেতে পারবে না।";
}
?>
```

**ব্যাখ্যা**:
- **শর্ত**: `$fare >= 20` — টাকা ২০ বা তার বেশি কি না।
- এখানে `$fare = 15`, তাই আউটপুট: **তুমি বাসে যেতে পারবে না।**

**চেষ্টা করুন**: `$fare` এর মান ২৫ করে চালান। আউটপুট কী হবে?

---

#### ব্যায়াম ২: স্কুলে যাওয়া
**সমস্যা**: একটি PHP প্রোগ্রাম লিখুন যেটি চেক করবে একজন ছাত্রের বয়স ৬ বা তার বেশি কি না। যদি বয়স ৬ বা তার বেশি হয়, তবে প্রিন্ট করবে "তুমি স্কুলে যেতে পারবে।" না হলে প্রিন্ট করবে "তুমি স্কুলে যেতে পারবে না।"

**সমাধান**:
```php
<?php
$age = 5;

if ($age >= 6) {
    echo "তুমি স্কুলে যেতে পারবে।";
} else {
    echo "তুমি স্কুলে যেতে পারবে না।";
}
?>
```

**ব্যাখ্যা**:
- **শর্ত**: `$age >= 6` — বয়স ৬ বা তার বেশি কি না।
- এখানে `$age = 5`, তাই আউটপুট: **তুমি স্কুলে যেতে পারবে না।**

**চেষ্টা করুন**: `$age` এর মান ৭ করে চালান। আউটপুট কী হবে?

---

#### ব্যায়াম ৩: দোকানে কেনাকাটা
**সমস্যা**: একটি PHP প্রোগ্রাম লিখুন যেটি চেক করবে আপনার কাছে ৫০০ টাকা আছে কি না। যদি ৫০০ টাকা থাকে, তবে প্রিন্ট করবে "তুমি একটা শার্ট কিনতে পারবে।" না হলে প্রিন্ট করবে "তুমি শুধু টি-শার্ট কিনতে পারবে।"

**সমাধান**:
```php
<?php
$money = 400;

if ($money >= 500) {
    echo "তুমি একটা শার্ট কিনতে পারবে।";
} else {
    echo "তুমি শুধু টি-শার্ট কিনতে পারবে।";
}
?>
```

**ব্যাখ্যা**:
- **শর্ত**: `$money >= 500` — টাকা ৫০০ বা তার বেশি কি না।
- এখানে `$money = 400`, তাই আউটপুট: **তুমি শুধু টি-শার্ট কিনতে পারবে।**

**চেষ্টা করুন**: `$money` এর মান ৫০০ বা ৬০০ করে চালান। আউটপুট কী হবে?

---

### আপনার অগ্রগতি
- আপনি এখন **if...else** এর বেসিক ধারণা এবং তুলনা অপারেটর (যেমন `>=`, `<`) বুঝতে পেরেছেন।
- আমি মনে রাখবো যে আপনি এখনো **ternary operators** বা জটিল শর্ত (যেমন `&&`, `||`) শিখেননি। পরবর্তী ধাপে আমরা এগুলো নিয়ে আলোচনা করবো, যখন আপনি প্রস্তুত হবেন।
- আমি আপনার PHP কোর্সের সাথে তাল মিলিয়ে চলবো। আপনি যদি কোর্সের কোনো নির্দিষ্ট অংশে পৌঁছান (যেমন, loops বা arrays), আমাকে বলবেন, আমি সেই অনুযায়ী ব্যায়াম দেবো।

---

### পরামর্শ
- **চর্চা করুন**: উপরের ব্যায়ামগুলো নিজে লিখে চালান। মান পরিবর্তন করে দেখুন আউটপুট কী হয়।
- **ভুল হলে শিখুন**: যদি কোড কাজ না করে, চেক করুন সেমিকোলন (`;`) বা ব্র্যাকেট (`{}`) ঠিক আছে কি না। প্রয়োজনে আমাকে জিজ্ঞাসা করুন।
- **কোর্সের সাথে চলুন**: আপনার Udemy কোর্সে if...else এর অংশটি দেখুন এবং সেখানকার উদাহরণগুলো চর্চা করুন।
- **মজা করুন**: প্রোগ্রামিং শেখা একটা মজার যাত্রা। ছোট ছোট সাফল্য উপভোগ করুন!
