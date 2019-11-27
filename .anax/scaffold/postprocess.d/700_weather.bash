#!/usr/bin/env bash

# Copy the configuration files
rsync -av vendor/emau18/weather/config ./

# Copy the controller and model files
rsync -av vendor/emau18/weather/src ./

# Copy the view files
rsync -av vendor/emau18/weather/view ./
