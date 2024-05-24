FROM python:3.9
WORKDIR "/app"

RUN apt-get update && apt-get install -y --no-install-recommends \
    build-essential \
    cmake \
    gfortran \
    git \
    wget \
    curl \
    graphicsmagick \
    libgraphicsmagick1-dev \
    libatlas-dev \
    libavcodec-dev \
    libavformat-dev \
    libboost-all-dev \
    libgtk2.0-dev \
    libjpeg-dev \
    liblapack-dev \
    libswscale-dev \
    pkg-config \
    python3-dev \
    python3-numpy \
    software-properties-common \
    zip

RUN cd ~ && \
    mkdir -p dlib && \
    git clone -b 'v19.21' --single-branch https://github.com/davisking/dlib.git dlib/ && \
    cd  ~/dlib/ && \
    python3 setup.py install --yes USE_AVX_INSTRUCTIONS

COPY requirements.txt requirements.txt
RUN pip install -r requirements.txt

CMD ["python", "api.py"]