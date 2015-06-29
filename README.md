# iwanami-piano


###　検索ロジックについて
-----------------------------------------------
「全体系」  
・全てのレシピ名で検索し、そのレシピが検索結果に入ってること  
・全ての商品名で検索し、その商品の連携材料が入ったレシピが全て検索結果に入ってること  

「個別系」  
＝＞検索クエリーでレシピが入ってる系  
* 「ハンバーグ」で検索すると http://recipe.yamasa-test.com/recipes/284 が検索結果に入ってること。
* 「レンコン」＝＞ http://recipe.yamasa-test.com/recipes/533
* 「ジュレ」＝＞ http://recipe.yamasa-test.com/recipes/1259
* 「ジュレ」＝＞ http://recipe.yamasa-test.com/recipes/212


・「ローストビーフの貝割れ巻き　おろしぽん酢ソース」＝＞ http://recipe.yamasa-test.com/recipes/1988

＝＞検索クエリーが同じようになってる系
・「そうめん」と「素麺」
「鶏肉」と「とり肉」
「しょうが焼き」と「生姜焼き」
の検索結果が同じになってること（現在、順は無視）

＝＞ある検索クエリーに、レシピが入っていない系（非該当キーワードのテスト）
* 「そうめん」で検索すると、http://recipe.yamasa-test.com/recipes/1092 が検索結果に入ってないこと。
* 「そうめん」＝＞ http://recipe.yamasa-test.com/recipes/1897
* 「ラーメン」＝＞ http://recipe.yamasa-test.com/recipes/1753
* 「パスタ」＝＞ http://recipe.yamasa-test.com/recipes/1215
* 「パスタ」＝＞ http://recipe.yamasa-test.com/recipes/597
* 「パスタ」＝＞ http://recipe.yamasa-test.com/recipes/1146
* 「パスタ」＝＞ http://recipe.yamasa-test.com/recipes/1680
* 「パスタ」＝＞ http://recipe.yamasa-test.com/recipes/1217
* 「パスタ」＝＞ http://recipe.yamasa-test.com/recipes/397
* 「パスタ」＝＞ http://recipe.yamasa-test.com/recipes/1827


＝＞カテゴリ検索系  
カテゴリ検索　調理方法「和える」で下記が表示される  
https://recipe.yamasa.com/recipes/745  
https://recipe.yamasa.com/recipes/1222  

カテゴリ検索　食材「麺・パスタ」で下記が表示される  
https://recipe.yamasa.com/recipes/34  
https://recipe.yamasa.com/recipes/499  

カテゴリ検索　ジャンル「イタリアン」で下記が表示される  
https://recipe.yamasa.com/recipes/268  
https://recipe.yamasa.com/recipes/1018  

-----------------------------------------------