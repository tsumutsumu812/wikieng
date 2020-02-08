# Name
 
Wikieng
英語版Wikipediaで英語を学習するためのアプリです。
 
#  Inspire
去年１年間（２０１８年）TOEICの勉強をしていて、その中で読解力をつけようとよく英語版Wikipediaをよく読んでいました<br>
→途中で文構造が難しいところがあったり、難単語があったりして、そういった部分は読み飛ばしていた<br>
→Wikipediaの記事にマーカーで書き込みできれば英文解釈が容易にできるのでは、難単語の意味を例文と共に保存して復習できるようにすれば語彙力がつくのでは<br>
→自分で作ろう！！<br>
という理由でアプリを作成しました。

# Tools
- フロント
  - Vue.js 2.6.11
  - Scss
- バックエンド
  - php 7.3
  - laravel 6.11.0
- サーバー
  - nginx 1.15
- DB
  - mysql 5.7(ローカル)
  - RDS(AWS)
- インフラ
  - Docker
    - docker-compose（ローカル環境でdockerを用いて開発するため）
  - AWS 
    - ECS/ECR
    - RDS(mysql)
    - EC2
    - S3
    - VPC
    - Route53
    - ALB
    - ACM
  - Terraform（AWSをコード化するため）
  - CircleCI

その他
アプリ内でMediawiki API(wikipediaのAPI)、デ辞蔵（英和辞書API)使用
 
# Note
 
簡単ログインを用いるとゲストユーザー用のユーザーでログインできます
 
# Comment
 
皆さま、英語版Wikiを読みましょう。
 

