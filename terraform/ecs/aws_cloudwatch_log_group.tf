resource "aws_cloudwatch_log_group" "sample-service" {
  name = "example"
}

resource "aws_cloudwatch_log_group" "app" {
  name = "app"
}

resource "aws_cloudwatch_log_group" "migration" {
  name = "migration"
}
