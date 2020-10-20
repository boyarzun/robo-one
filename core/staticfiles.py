from django.contrib.staticfiles.apps import StaticFilesConfig


class StaticFilesConfig(StaticFilesConfig):
    ignore_patterns = ["CVS", ".*", "*~"]
