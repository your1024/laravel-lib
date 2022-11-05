# laravel-lib
laravel lib

1. laravel 软删除改造成boolean类型 字段为 deleted
```
 在model类中例如UserModel使用 use Yhy\LaravelLib\BoolreanSoftDeletes
 const DELETED = 'deleted' // 对应数据可的字段，默认为deleted
```
2. model json 和 时间戳类型转换
```
 在model类中例如UserModel
  protected $casts = [
        'created_at' => new DateTime(),
        'text_json' => new Json()
    ];
```
3. 验证规则: 金额, 银行卡号, 中文名, 英文名, 邮箱,邮政编码,身份证号, 手机 ,
   座机, 密码, 用户名,评分,中文
```
    在Request类中例如AddUserRequest
    public function rules()
    {
       return [
           'amount' => ['required',new AmountRule()],
           'email' => ['required',new EmailRule()]
       ];
    }
```   

